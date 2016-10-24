<?php



    // Set the output file name.
    define ("OUTPUT_FILE", "sitemap2.xml");
    

    // Set what url is to be sitemap
    define ("SITE", "http://localhost/GameBuzz");


    // Set false if running on webpage
    define ("CLI", false);


    // Define here the URLs to skip. All URLs that start with the defined URL 
    // will be skipped too.

    $skip_url = array (
                       
                      );
    

    // How often the search engine should update
    define ("FREQUENCY", "weekly");
    

    // General information for search engines. You have to modify the code to set
    // various priority values for different pages. Currently, the default behavior
    // is that all pages have the same priority.
    define ("PRIORITY", "0.5");


    // When your web server does not send the Content-Type header, then set
    // this to 'true'. But I don't suggest this.
    define ("IGNORE_EMPTY_CONTENT_TYPE", false);





function GetPage ($url)
{
    $ch = curl_init ($url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_USERAGENT, AGENT);

    $data = curl_exec($ch);

    curl_close($ch);

    return $data;
}

function GetQuotedUrl ($str)
{
    $quote = substr ($str, 0, 1);
    if (($quote != "\"") && ($quote != "'"))  
    {                                        
        return $str;                         
    }                                                 

    $ret = "";
    $len = strlen ($str);    
    for ($i = 1; $i < $len; $i++) 
    {
        $ch = substr ($str, $i, 1);
        
        if ($ch == $quote) break; 

        $ret .= $ch;
    }
    
    return $ret;
}

function GetHREFValue ($anchor)
{
    $split1  = explode ("href=", $anchor);
    $split2 = explode (">", $split1[1]);
    $href_string = $split2[0];

    $first_ch = substr ($href_string, 0, 1);
    if ($first_ch == "\"" || $first_ch == "'")
    {
        $url = GetQuotedUrl ($href_string);
    }
    else
    {
        $spaces_split = explode (" ", $href_string);
        $url          = $spaces_split[0];
    }
    return $url;
}

function GetEffectiveURL ($url)
{
    // Create a curl handle
    $ch = curl_init ($url);

    // Send HTTP request and follow redirections
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_USERAGENT, AGENT);
    curl_exec($ch);

    // Get the last effective URL
    $effective_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
  

    // Decode the URL, uncoment it an use the variable if needed
    // $effective_url_decoded = curl_unescape($ch, $effective_url);


    // Close the handle
    curl_close($ch);

    return $effective_url;
}

function ValidateURL ($url_base, $url)
{
    global $scanned;
        
    $parsed_url = parse_url ($url);
        
    $scheme = $parsed_url["scheme"];
        
    // Skip URL if different scheme or not relative URL 
    if (($scheme != SITE_SCHEME) && ($scheme != "")) return false;
        
    $host = $parsed_url["host"];
                
    // Skips the URL if the host is different
    if (($host != SITE_HOST) && ($host != "")) return false;
    

    if ($host == "")    // This handles URL without the host values
    {
        if (substr ($url, 0, 1) == '#') 
        {
            echo "Skip page anchor: $url" . NL;
            return false;
        }
    
        if (substr ($url, 0, 1) == '/') 
        {
            $url = SITE_SCHEME . "://" . SITE_HOST . $url;
        }
        else 
        {
        
            $path = parse_url ($url_base, PHP_URL_PATH);
            
            if (substr ($path, -1) == '/') 
            {
                
                $url = SITE_SCHEME . "://" . SITE_HOST . $path . $url;
            }
            else 
            {
                $dirname = dirname ($path);

                
                if ($dirname[0] != '/')
                {
                    $dirname = "/$dirname";
                }
    
                if (substr ($dirname, -1) != '/')
                {
                    $dirname = "$dirname/";
                }

                // Construct full URL
                $url = SITE_SCHEME . "://" . SITE_HOST . $dirname . $url;
            }
        }
    }

    // 
    $url = GetEffectiveURL ($url); 

    // Stop scanning if scanned already   
    if (in_array ($url, $scanned)) return false;
    
    return $url;
}


function SkipURL ($url)
{
    global $skip_url;

    if (isset ($skip_url))
    {
        foreach ($skip_url as $v)
        {           
            if (substr ($url, 0, strlen ($v)) == $v) return true; // Skip this URL
        }
    }

    return false;            
}

function Scan ($url)
{
    global $scanned, $pf;

    $scanned[] = $url;  

    if (SkipURL ($url))
    {
        echo "Skip URL $url" . NL;
        return false;
    }
    
    // Removes slashes that are not needed
    if (substr ($url, -2) == "//") 
    {
        $url = substr ($url, 0, -2);
    }
    if (substr ($url, -1) == "/") 
    {
        $url = substr ($url, 0, -1);
    }


    echo "Scan $url" . NL;

    $headers = get_headers ($url, 1);

    // This handles non-existent pages
    if (strpos ($headers[0], "404") !== false)
    {
        echo "Not found: $url" . NL;
        return false;
    }

    // Handles redirect pages
    if (strpos ($headers[0], "301") !== false)
    {   
        $url = $headers["Location"];     // Continue with new URL
        echo "Redirected to: $url" . NL;
    }
    
    else if (strpos ($headers[0], "200") == false)
    {
        $url = $headers["Location"];
        echo "Skip HTTP code $headers[0]: $url" . NL;
        return false;
    }

    // Content Type
    if (is_array ($headers["Content-Type"]))
    {
        $content = explode (";", $headers["Content-Type"][0]);
    }
    else
    {
        $content = explode (";", $headers["Content-Type"]);
    }
    
    $content_type = trim (strtolower ($content[0]));
    
    // Check content type for website
    if ($content_type != "text/html") 
    {
        if ($content_type == "" && IGNORE_EMPTY_CONTENT_TYPE)
        {
            echo "Info: Ignoring empty Content-Type." . NL;
        }
        else
        {
            if ($content_type == "")
            {
                echo "Info: Content-Type is not sent by the web server. Change " .
                     "'IGNORE_EMPTY_CONTENT_TYPE' to 'true' in the sitemap script " .
                     "to scan those pages too." . NL;
            }
            else
            {
                echo "Info: $url is not a website: $content[0]" . NL;
            }
            return false;
        }
    }

    $html = GetPage ($url);
    $html = trim ($html);
    if ($html == "") return true;  
    
    $html = str_replace ("\r", " ", $html);        
    $html = str_replace ("\n", " ", $html);        
    $html = str_replace ("\t", " ", $html);        
    $html = str_replace ("<A ", "<a ", $html);     

    $first_anchor = strpos ($html, "<a ");    

    if ($first_anchor === false) return true; 

    $html = substr ($html, $first_anchor);    

    $a1   = explode ("<a ", $html);
    foreach ($a1 as $next_url)
    {
        $next_url = trim ($next_url);
        
        // Skip empty array entry
        if ($next_url == "") continue; 
        
        // Get the attribute value from href
        $next_url = GetHREFValue ($next_url); 
        
        // Do all skip checks and construct full URL
        $next_url = ValidateURL ($url, $next_url);
        
        // Skip if url is not valid
        if ($next_url == false) continue;

        if (Scan ($next_url))
        {
            // Add URL to sitemap
            fwrite ($pf, "  <url>\n" .
                         "    <loc>" . htmlentities ($next_url) ."</loc>\n" .
                         "    <changefreq>" . FREQUENCY . "</changefreq>\n" .
                         "    <priority>" . PRIORITY . "</priority>\n" .
                         "  </url>\n"); 
        }
    }

    return true;
}

    // Program start
    define ("VERSION", "2.1");                                            
    define ("AGENT", "Mozilla/5.0 (compatible; Plop PHP XML Sitemap Generator/" . VERSION . ")");
    define ("NL", CLI ? "\n" : "<br>");
    define ("SITE_SCHEME", parse_url (SITE, PHP_URL_SCHEME));
    define ("SITE_HOST"  , parse_url (SITE, PHP_URL_HOST));

    error_reporting (E_ERROR | E_WARNING | E_PARSE);

    $pf = fopen (OUTPUT_FILE, "w");
    if (!$pf)
    {
        echo "Cannot create " . OUTPUT_FILE . "!" . NL;
        return;
    }

    fwrite ($pf, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" .
                 "<!--  " . VERSION . "  -->\n" .
                 "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"\n" .
                 "        xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"\n" .
                 "        xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9\n" .
                 "        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">\n" .
                 "  <url>\n" .
                 "    <loc>" . SITE . "/</loc>\n" .
                 "    <changefreq>" . FREQUENCY . "</changefreq>\n" .
                 "  </url>\n");

    $scanned = array();
    Scan (GetEffectiveURL (SITE));
    
    fwrite ($pf, "</urlset>\n");
    fclose ($pf);

    echo "Done." . NL;
    echo OUTPUT_FILE . " created." . NL;
?>
