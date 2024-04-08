<footer>
    <div class="footer-top">
        <div class="footer-container">

            <div class="links">
                <div class="links-list">
                    <h3>link1</h3>
                    <ul>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                    </ul>
                    <h3>link2</h3>
                    <ul>
                        <li>item1</li>
                        <li>item1</li>
                    </ul>
                    <h3>link3</h3>
                    <ul>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                    </ul>
                    <h3>link4</h3>
                    <ul>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                        <li>item1</li>
                    </ul>
                </div>
            </div>
            <div class="logo-footer">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>

        </div>
    </div>


    <div class="subfooter-container">
        <div class="sub-footer">
            <button class="signup-btn">Sign-up Now!</button>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="social">
                    <img v-for="social of socials" :src="social.icon" :alt="social.name">
                </div>
            </div>
        </div>
    </div>
</footer>