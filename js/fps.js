var frameCount = 0;
        var startTime = performance.now();

        function showFPS() {
            var currentTime = performance.now();
            var elapsedTime = currentTime - startTime;
            var fps = Math.round((frameCount / elapsedTime) * 1000);
            document.getElementById("fps").textContent = fps + "fps";

            frameCount++;
            if (elapsedTime > 1000) {
                startTime = currentTime;
                frameCount = 0;
            }
            
            requestAnimationFrame(showFPS);
        }

        showFPS();