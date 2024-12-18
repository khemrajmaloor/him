<!-- Footer -->
<footer class="footer">
    <a href="mailto:khemrajraj73@gmail.com" class="footer__link btn">Contact Me</a>
    <ul class="social-list">

        <li class="social-list__item">
            <a class="social-list__link" href="https://github.com/khemrajmaloor">
                <i class="fab fa-github"></i>
                Github
            </a>
            <a class="social-list__link" href="https://discord.com/users/Khemraj#4001">
                <i class="fab fa-discord"></i>
                Discord
            </a>
            <a class="social-list__link" href="https://www.linkedin.com/in/khem-raj/">
                <i class="fab fa-linkedin"></i>
                Linkedin
            </a>
        </li>

    </ul>
    <button id="scrollUpBtn" class="scroll-up-btn"><i class="fa-solid fa-angle-up"></i></button>

    <script >


function showCaption(element) {
    element.firstElementChild.style.display = "block";
}

function hideCaption(element) {
    element.firstElementChild.style.display = "none";
}

// Use const for variables that won't be reassigned
const skillsets = document.getElementsByClassName("skillset");

Array.from(skillsets).forEach(skillset => {
    const skills = skillset.getElementsByTagName("div");
    Array.from(skills).forEach(skill => {
        const html = "<i style='color:#f8333c' class='fa fa-code'></i>&nbsp;";
        skill.insertAdjacentHTML("afterbegin", html);
    });
});

// Use const for navToggle and navLinks since they won't be reassigned
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.nav__link');

navToggle.addEventListener('click', () => {
    document.body.classList.toggle('nav-open');
});

// Use forEach to add click event listeners to navLinks
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        document.body.classList.remove('nav-open');
    });
});


// Get the button
const scrollUpBtn = document.getElementById("scrollUpBtn");

// Show the button when the user scrolls down half of the window height
window.onscroll = function() {
    if (document.body.scrollTop > window.innerHeight / 2 || document.documentElement.scrollTop > window.innerHeight / 2) {
        scrollUpBtn.style.display = "block"; // Show the button
    } else {
        scrollUpBtn.style.display = "none"; // Hide the button
    }
};

// Scroll to the top smoothly when the button is clicked
scrollUpBtn.onclick = function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth" // Smooth scrolling
    });
};


    </script>
</footer>
</body>

</html>
