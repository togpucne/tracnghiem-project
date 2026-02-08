<div class="site-elevator">

    <!-- Messenger -->
    <div class="elevator-item">
        <a target="_blank" href="https://m.me/study4.official">
            <i class="fab fa-brands fa-facebook fa-2x"></i>
        </a>
    </div>

    <!-- SMS -->
    <div class="elevator-item">
        <a target="_blank" href="sms:0343635667">
            <i class="fas fa-comment-dots fa-2x"></i>
        </a>
    </div>

    <!-- Scroll Top -->
    <div class="elevator-item site-scrollTop"
        onclick="window.scrollTo({top:0, behavior:'smooth'})"
        id="site-scrollTop">

        <i class="fas fa-chevron-up"></i>

    </div>

</div>
<script>

const scrollBtn = document.getElementById("site-scrollTop");

window.addEventListener("scroll", function() {

    if (window.scrollY > 300) {
        scrollBtn.classList.add("show");
    } else {
        scrollBtn.classList.remove("show");
    }

});

function topFunction() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

</script>
