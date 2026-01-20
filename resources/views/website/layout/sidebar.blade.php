<section class="mkdf-side-menu">
    <div class="mkdf-close-side-menu-holder">
        <a class="mkdf-close-side-menu mkdf-close-side-menu-icon-pack" href="#">
            <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-cross "></span> </a>
    </div>
    <div id="media_image-5" class="widget mkdf-sidearea widget_media_image"><a href="#"><img width="150"
                height="25" src="{{ url('/') . '/website/assets/wp-content/uploads/2018/03/logo.png' }}"
                class="image wp-image-1107  attachment-full size-full" alt="h" loading="lazy"
                style="max-width: 100%; height: auto;" /></a></div>
    <div class="widget mkdf-separator-widget">
        <div class="mkdf-separator-holder clearfix  mkdf-separator-left mkdf-separator-normal"
            style="margin-top: -18px;margin-bottom: 26px">
            <div class="mkdf-separator"
                style="border-color: #ffffff;border-style: solid;width: 145px;border-bottom-width: 2px"></div>
        </div>
    </div>
    <div class="widget mkdf-social-icons-group-widget text-align-left"> <a
            class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835"
            style="color: #ffffff;;font-size: 18px;margin: 0px 20px 0px 0px;"
            href="{{ \App\Models\Setting::first()->facebook }}" target="_blank">
            <span class="mkdf-social-icon-widget ion-social-facebook"></span> </a>
        <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835"
            style="color: #ffffff;;font-size: 18px;margin: 0px 20px 0px 0px;"
            href="{{ \App\Models\Setting::first()->twitter }}" target="_blank">
            <span class="mkdf-social-icon-widget ion-social-instagram"></span> </a>
        <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835"
            style="color: #ffffff;;font-size: 18px;margin: 0px 20px 0px 0px;"
            href="{{ \App\Models\Setting::first()->linkdin }}" target="_blank">
            <span class="mkdf-social-icon-widget ion-social-linkedin"></span> </a>
        <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835"
            style="color: #ffffff;;font-size: 18px;margin: 0px 20px 0px 0px;"
            href="{{ \App\Models\Setting::first()->trustpilot }}" target="_blank">
            <img src="{{ URL::to('trust.png') }}" style="margin-top: -4px" alt="Trust Pilot" /> </a>
    </div>
    <div id="text-10" class="widget mkdf-sidearea widget_text">
        <div class="mkdf-widget-title-holder">
            <h5 class="mkdf-widget-title">{{ \App\Models\Contact::first()->name }}</h5>
        </div>
        <div class="textwidget">
            <p><a
                    href="https://www.google.com/maps/dir//11+Station+Rd,+London+NW10+4UJ,+UK/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x487611c7e6fe2f27:0xbdd08035c91bee74?sa=X&ved=2ahUKEwjUip31z5-CAxUu_7sIHThPCq8QwwV6BAgREAA&ved=2ahUKEwjUip31z5-CAxUu_7sIHThPCq8QwwV6BAgTEAQ">
                    {{ \App\Models\Contact::first()->address }}</a><br />
                Phone: <a href="tel:0208 963 1050">{{ \App\Models\Contact::first()->telephone }}</a><br />
                Fax: <a href="tel:0208 963 1050">{{ \App\Models\Contact::first()->fax }}</a><br />
                Email: <a><span class="__cf_email__"
                        data-cfemail="3b5a554c5a574f7b4a545f5e52554f5e495a584f524d5e15585456">{{ \App\Models\Contact::first()->email }}</span></a>
            </p>
        </div>
    </div>
    <div id="text-11" class="widget mkdf-sidearea widget_text">
        <div class="mkdf-widget-title-holder">
            <h5 class="mkdf-widget-title">Watford Office</h5>
        </div>
        <div class="textwidget">
            <p><a
                    href="https://www.google.com/maps/dir//Halkin,+Station+Road,+Watford+WD17+1+ET/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x48766abf1867b6c3:0xa31bedfd7c3f1bec?sa=X&ved=2ahUKEwir4sKx0J-CAxWXUqQEHdN_D18Q9Rd6BAhHEAA&ved=2ahUKEwir4sKx0J-CAxWXUqQEHdN_D18Q9Rd6BAhOEAU">
                    8 Station Rd Watford WD17 1EG </a><br />
                Phone: <a href="tel:0208 963 1050">{{ \App\Models\Contact::first()->telephone }}</a></p>
        </div>
    </div>
    <div id="text-11" class="widget mkdf-sidearea widget_text">
        <div class="mkdf-widget-title-holder">
            <h5 class="mkdf-widget-title">Borehamwood Office</h5>
        </div>
        <div class="textwidget">
            <p><a
                    href="https://www.google.com/maps/dir//Regus,+4+Maxwell+Rd,+Imperial+Place,+Borehamwood+WD6+1JN/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x4876166c422ecd75:0x5dfc3ee9fd9ef89d?sa=X&ved=2ahUKEwje-tPb0J-CAxVtVaQEHW99B7oQ9Rd6BAg4EAA&ved=2ahUKEwje-tPb0J-CAxVtVaQEHW99B7oQ9Rd6BAhCEAQ">
                    Regus, 4 Maxwell Rd, Imperial Place, Borehamwood WD6 1JN</a><br />
                Phone: <a href="tel:0208 963 1050">{{ \App\Models\Contact::first()->telephone }}</a></p>
        </div>
    </div>
    <div id="text-11" class="widget mkdf-sidearea widget_text">
        <div class="mkdf-widget-title-holder">
            <h5 class="mkdf-widget-title">Central London Office</h5>
        </div>
        <div class="textwidget">
            <p><a
                    href="https://www.google.com/maps?ll=51.520006,-0.156727&z=15&t=m&hl=en-US&gl=US&mapclient=embed&q=83+Baker+St+London+W1U+6AG+UK">
                    83 Baker Street London W1U 6AG</a><br />
                Phone: <a href="tel:0208 963 1050">0208 963 1050</a></p>
        </div>
    </div>
    <div id="text-11" class="widget mkdf-sidearea widget_text">
        <div class="mkdf-widget-title-holder">
            <h5 class="mkdf-widget-title">Luton office</h5>
        </div>
        <div class="textwidget">
            <p><a
                    href="https://www.google.com/maps/place/Lux+Offices/@51.8758635,-0.4125694,17z/data=!4m10!1m2!2m1!1sVictory+House,+Chobham+Street,+Luton,+Beds,+LU1+3BS!3m6!1s0x487649c716895ddb:0xaad4a5abf0285460!8m2!3d51.8758087!4d-0.4099575!15sCjNWaWN0b3J5IEhvdXNlLCBDaG9iaGFtIFN0cmVldCwgTHV0b24sIEJlZHMsIExVMSAzQlOSARpvZmZpY2Vfc3BhY2VfcmVudGFsX2FnZW5jeaoBfwoIL20vMGZnNmsKCC9tLzBqNHA1EAEqESINdmljdG9yeSBob3VzZSgAMh8QASIb8Lok7Z5uGU_C2pWEuwi37Kfop9SBaLH8AiVWMjMQAiIvdmljdG9yeSBob3VzZSBjaG9iaGFtIHN0cmVldCBsdXRvbiBiZWRzIGx1MSAzYnPgAQA!16s%2Fg%2F11ldj2kkb0?entry=ttu&g_ep=EgoyMDI1MDgyNS4wIKXMDSoASAFQAw%3D%3D">
                    Lux office - Victory House, Chobham Street, Luton, Beds, LU1 3BS</a><br />
                Phone: <a href="tel:0208 963 1050">0208 963 1050</a></p>
        </div>
    </div>
</section>
