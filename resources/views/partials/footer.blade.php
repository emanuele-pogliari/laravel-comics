<footer>
    <div class="footer-top">
        <div class="footer-container">

            <div class="links">
                @foreach($footerLinks as $footerLink)
                <div class="links-list">
                    <h3>{{$footerLink['title']}}</h3>
                    <ul>
                        @foreach($footerLink['links'] as $links)
                        <li>{{$links}}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
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