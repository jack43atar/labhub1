    <footer class="company_footer">
        <h2>Be The part of our company</h2>
        <div class="footer_area">
            <div class="left_footer">
                <h2>Contact</h2>
                <ul>
                    <li>+1 973 348 9011</li>
                </ul>
				<h2>Email </h2>
                <ul>
                    <li><a href="mailto:info@telcron.net" class="text-white">info@telcron.net</a></li>
                </ul>
                <h2>Follow Us</h2>
                <div class="social">
                    <a href="https://www.youtube.com/@TelcronLLC">
                        <img src="{{asset('images/youtube.svg')}}">
                    </a>
                    <a href="https://www.facebook.com/telcron/shop">
                        <img src="{{asset('images/facebook.svg')}}">
                    </a>
                    <a href="https://twitter.com/telcron_/status/1646591640335785984?t=7KH9JSM-5WQpj6CoAhJzQA&s=19">
                        <img src="{{asset('images/twitter.svg')}}">
                    </a>
                </div>
            </div>
            <div class="analytics_footer">
                <div class="right_footer">
                    <div class="footer_boxes">
                        <h2>Lab Reservation</h2>
                        <ul>
                            <li><a href="{{route('lav_reservation.schedule_testing')}}">Schedule Testing</a> </li>
                            <li><a href="{{url('lab-reservation/faqs')}}">FAQs</a> </li>
                            <li><a href="{{url('lab-reservation/submit-lab-review')}}"> Submit Lab Review</a></li>
                            <li><a href="{{url('lab-reservation/rewards')}}">Rewards</a> </li>
                        </ul>
                    </div>
                    <div class="footer_boxes">
                        <h2>Services</h2>
                         <ul>
                        <li><a href="{{route('store')}}">Store</a> </li>
                        <li><a href="https://testlabhub.com/services/compliance-management">Compliance Management</a> </li>
                        <li> <a href="https://testlabhub.com/services/consulting">Consulting</a> </li>
                        <li><a href="https://testlabhub.com/services/eSource">Esource</a> </li>
                        <li><a href="https://testlabhub.com/services/resources/emc">Resource</a> </li>
                    </ul>
                    </div>
                    <div class="footer_boxes">
                        <h2>About</h2>
                        <ul>
                            <li><a href="{{route('about.our_capabilities')}}">Capabilities</a> </li>
                            <li><a href="{{route('about.our_team')}}">Our Team</a> </li>
                            <li> <a href="{{route('about.our_partners')}}">  Our Partners</a></li>
                            <li><a href="{{route('about.blog')}}">Blog</a> </li>
                        </ul>
                    </div>
                    <div class="footer_boxes">
                        <h2>Schedule Now</h2>
                        <ul>
                            <li><a href="{{route('submitrfq')}}"> Submit Device for Certification</a></li>
                            <li><a href="{{route('submitrfq')}}">Test</a></li>
                            <li><a href="{{route('book_lab')}}"> Reserve Lab for</a></li>
                            <li><a href="{{route('book_lab')}}"> Pre-Certification Testing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="reserved">
                    <p>© <script>document.write(new Date().getFullYear())</script> Telcron LLC., All Rights Reserved.</p>
                </div>
            </div>
        </div>
        <div class="reserved rezerve_second d-none">
            <p>© <script>document.write(new Date().getFullYear())</script> Telcron LLC., All Rights Reserved.</p>
        </div>
    </footer>
</section>
</body>
</html>