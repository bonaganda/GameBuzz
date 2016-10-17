<div class="mySlides fade">
                        <a href="News1.php"> <img src="Images/News1.jpg" style="width: 675px; height: 400px"></a>
                        <div class="text">Heroes of the Storm rated as the shittest game on the world, and zarya just got nerfed!</div>
                    </div>            

                    <div class="mySlides fade">
                        <a href="News2.php"> <img src="Images/News2.jpg" style="width: 675px; height: 400px"></a>

                        <div class="text">BattleNet is finally closing after selling overwatch to steam!</div>
                    </div>

                    <div class="mySlides fade">
                        <a href="News3.php"> <img src="Images/News3.jpg" style="width: 675px; height: 400px"></a>
                        <div class="text">Asian pro team has decided to invade oceanic territory but lost to the mere ozies</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <br>

                    <div style="text-align:center">
                        <span class="dot" style="position:absolute;right:50%;top:90%" onclick="currentSlide(1)"></span> 
                        <span class="dot" style="position:absolute;right:47%;top:90%" onclick="currentSlide(2)"></span> 
                        <span class="dot" style="position:absolute;right:44%;top:90%"onclick="currentSlide(3)"></span> 
                    </div>

                    <script> var slideIndex = 1;
                        showSlides(slideIndex);
                        function plusSlides(n) {
                            showSlides(slideIndex += n);
                        }
                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }
                        function showSlides(n) {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("dot");
                            if (n > slides.length) {
                                slideIndex = 1;
                            }
                            if (n < 1) {
                                slideIndex = slides.length;
                            }
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " active";
                        }
                    </script>