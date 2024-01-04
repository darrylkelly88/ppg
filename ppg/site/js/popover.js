        // Delayed loading function
        function loadDelayedSticky() {
            // Create the sticky element after a delay of 20 seconds
            setTimeout(function () {
                var stickyElement = document.createElement("div");
                stickyElement.className = "fixed-bottom alert alert-info alert-dismissible";
                stickyElement.style.height = "10%"; // Set the height according to your needs
                stickyElement.innerHTML = '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><div class="container"><div class="row justify-content-center"><div class="col-12 text-center d-none d-sm-block"><img src="https://via.placeholder.com/728x90"><ins class="adsbygoogle" style="display:block" data-ad-client="your-ad-client-id" data-ad-slot="your-ad-slot-id" data-ad-format="auto"></ins></div></div><div class="row"><div class="col-12 text-center d-md-none"><img src="https://via.placeholder.com/300x50"><ins class="adsbygoogle" style="display:block" data-ad-client="your-ad-client-id" data-ad-slot="your-ad-slot-id" data-ad-format="auto"></ins></div></div></div>';
                document.body.appendChild(stickyElement);
            }, 20000); // 20 seconds in milliseconds
        }

        // Call the delayed loading function
        loadDelayedSticky();