@extends('layouts.app')



@section('content')
<style>
    span{
        font-size:25px;
    }
</style>
    <div class="card">
        <div class="card-body">
            <div><h2 style="display:inline">This is your visitor ID: </h2><span id="uuid"></span></div>
            <div><h2 style="display:inline">IP: </h2><span id="ip_address"></span></div>
            <div><h2 style="display:inline">Platform: </h2><span id="platform"></span></div>
            <div><h2 style="display:inline">Browser: </h2><span id="browser"></span></div>
            <div><h2 style="display:inline">Browser Width: </h2><span id="bwidth"></span></div>
            <div><h2 style="display:inline">Browser Height: </h2><span id="bheight"></span></div>
        </div>
        <div class="card-footer">
            <div><h2 style="display:inline">Are you a company? </h2><span id="is_company"></span></div>
            <div><h2 style="display:inline">This time is first for you? </h2><span id="first_visitor"></span></div>
        </div>
   </div>

@endsection




@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.2.0/crypto-js.min.js"></script>
    <script>    
        var uuid={};
        var firstVisitor = null;



        function generateCustomUUID(userinfo){
            var userAgent=userinfo.userAgent;
            var language=userinfo.language;
            var screenWidth= userinfo.screenWidth;
            var screenHeight=userinfo.screenHeight;
            var colorDepth = userinfo.colorDepth;
            var browserName = userinfo.browserName;
            var platform = userinfo.platform;
            var cookiesEnabled = userinfo.cookiesEnabled;
            var timezone = userinfo.timezone;
            fetch('https://api.ipify.org?format=json')
            .then((response) => response.json())
            .then((data) => {
                fetch(
                'https://api.ipdata.co/' +  /// ip to company api  look up company 
                    // '162.159.129.67' +
                    data.ip +
                    '/asn?api-key=5d8bce907c9a37dbf3e4a40a5f1fe28adce4419a60191fa75279abc7'
                )
                .then((ipdata) => ipdata.json())
                .then((company) => {
                    var combinedInfo = `${userAgent}-${language}-${screenWidth}-${screenHeight}-${colorDepth}-${browserName}-${platform}-${cookiesEnabled}-${timezone}-${data.ip}`;
                    var hash =CryptoJS.SHA256(combinedInfo).toString();
                    uuid = {
                        userAgent:userAgent,
                        language:language,
                        screenWidth:screenWidth,
                        screenHeight:screenHeight,
                        colorDepth:colorDepth,
                        browserName:browserName,
                        platform:platform,
                        cookiesEnabled:cookiesEnabled,
                        timezone:timezone,
                        company: company == null ? -1 : company,
                        ip: data.ip,
                        uuid: hash.substring(0, 8)+'-'+hash.substring(8,4)+'-'+hash.substring(12, 4)+'-'+hash.substring(16,4)+'-'+hash.substring(20, 12)
                    };
                    $('#uuid')[0].innerHTML=uuid.uuid;
                    $('#ip_address')[0].innerHTML=uuid.ip;
                    $('#platform')[0].innerHTML=uuid.platform;
                    $('#browser')[0].innerHTML=uuid.browserName;
                    $('#bwidth')[0].innerHTML=uuid.screenWidth;
                    $('#bheight')[0].innerHTML=uuid.screenHeight;
                    $('#is_company')[0].innerHTML=uuid.company==-1?"You are not a company but a person!":"Your company name is "+company.name;
                    

                    $.post('/track', {
                        uuid: uuid
                    },function(response){   
                        console.log(response)
                        $('#first_visitor')[0].innerHTML= response==1?"This is first time to track you!":"You were tracked already before!";
                    })
                })
            })

        };

        // Function to gather user information
        function gatherUserInfo(){
            var userInfo = {
            userAgent: navigator.userAgent,
            language: navigator.language,
            screenWidth: window.screen.width,
            screenHeight: window.screen.height,
            colorDepth: window.screen.colorDepth,
            browserName: getBrowserName(),
            platform: navigator.platform,
            cookiesEnabled: navigator.cookieEnabled,
            timezone: Intl.DateTimeFormat().resolvedOptions().timeZone
            };
            // You can add more properties based on your requirements
            return userInfo;
        };

        // Function to get the browser name
        function getBrowserName() {
            var userAgent = navigator.userAgent;

            if (userAgent.includes('Chrome')) return 'Chrome';
            if (userAgent.includes('Safari')) return 'Safari';
            if (userAgent.includes('Firefox')) return 'Firefox';
            if (userAgent.includes('Edge')) return 'Edge';
            if (userAgent.includes('MSIE') || userAgent.includes('Trident/'))
            return 'Internet Explorer';
            return 'Unknown';
        };
        generateCustomUUID(gatherUserInfo());

    </script>
@endsection