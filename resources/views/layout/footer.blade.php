<footer class="main-footer">
{{--    <div class="image-layer" style="background-image: url(assets/images/backgrounds/footer-bg-1.png);"></div>--}}
    <!-- /.image-layer -->
    <div class="upper-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="footer-widget footer-widget__about">
                        <a href="{{ asset('/') }}" class="footer-widget__logo">
                            <img src="assets/images/logo-dark.svg" width="200" alt="">
                        </a>
                        <div class="footer-widget__text">
                            @settings('footer_text')
                        </div>
                        <ul class="footer-widget__contact-list list-unstyled">
                            <li>
                                <a href="mailto:@settings('email_support')"><i class="fa fa-envelope"></i>@settings('email_support')</a>
                            </li>
                            {{--<li>
                                <a href="tel:92-666-888-000"><i class="fa fa-phone-square-alt"></i>92 666 888
                                    000</a>
                            </li>--}}
                        </ul><!-- /.footer-widget__contact -->
                        <div class="footer-widget__social">
                            <a href="#"><i class="fab fa-vk"></i></a>
                            <a href="#"><i class="fab fa-telegram"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div><!-- /.footer-widget__social -->
                    </div><!-- /.footer-widget footer-widget__about -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="footer-widget footer-widget__links">
                        <h3 class="footer-widget__title">Ссылки</h3><!-- /.footer-widget__title -->
                        <div class="footer-widget__links-wrap">
                            <ul class="list-unstyled">
                                <li><a href="#">Вакансии</a></li>
                                <li><a href="{{ route('camera') }}">Камеры</a></li>
                            </ul><!-- /.list-unstyled -->
                            <ul class="list-unstyled">

                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-widget__links-wrap -->
                    </div><!-- /.footer-widget footer-widget__about -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <p class="footer-phone"><a href="tel:{{ phone_link(settings('phone')) }}">@settings('phone')</a></p>
                    <a href="https://play.google.com/store/apps/details?id=org.uniapp.uniapp&pcampaignid=web_share" target="_blank" class="app-link app-link--google">
                        <svg width="120" height="29" viewBox="0 0 120 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M63.5822 7.23196C62.6494 7.23196 61.8632 6.91525 61.2413 6.29181C60.6246 5.68582 60.2803 4.85041 60.2957 3.99755C60.2957 3.08732 60.6144 2.31675 61.2413 1.70577C61.8606 1.08233 62.6469 0.765625 63.5796 0.765625C64.5021 0.765625 65.2883 1.08233 65.9204 1.70577C66.5474 2.3367 66.866 3.10727 66.866 3.99755C66.8558 4.91026 66.5371 5.68084 65.9204 6.28932C65.3012 6.91774 64.5149 7.23196 63.5822 7.23196ZM35.8286 7.23196C34.9164 7.23196 34.125 6.92024 33.4775 6.30428C32.8351 5.69081 32.5088 4.91525 32.5088 4.00004C32.5088 3.08483 32.8351 2.30927 33.4775 1.6958C34.1122 1.07984 34.9036 0.768119 35.8286 0.768119C36.2809 0.768119 36.7203 0.855401 37.1417 1.03246C37.5554 1.20453 37.892 1.43894 38.1412 1.72572L38.2029 1.79804L37.5065 2.46139L37.4346 2.37909C37.0414 1.92523 36.5147 1.70328 35.8183 1.70328C35.1965 1.70328 34.6543 1.91775 34.2073 2.34169C33.7576 2.76812 33.5289 3.32672 33.5289 4.00253C33.5289 4.67834 33.7576 5.23695 34.2073 5.66338C34.6543 6.08732 35.1965 6.30178 35.8183 6.30178C36.4813 6.30178 37.0389 6.08732 37.4731 5.66338C37.7301 5.414 37.8894 5.06488 37.9459 4.62348H35.713V3.69081H38.9044L38.9172 3.7756C38.9403 3.93271 38.9635 4.0948 38.9635 4.24443C38.9635 5.10478 38.6962 5.80054 38.1669 6.31425C37.5656 6.92273 36.7794 7.23196 35.8286 7.23196ZM72.7297 7.09979H71.7456L68.7315 2.41899L68.7572 3.26188V7.0973H67.7731V0.900289H68.896L68.9268 0.94767L71.761 5.35665L71.7353 4.51625V0.900289H72.7297V7.09979V7.09979ZM56.1871 7.09979H55.1901V1.83296H53.4608V0.900289H57.9138V1.83296H56.1845V7.09979H56.1871ZM52.6488 7.09979H51.6544V0.900289H52.6488V7.09979ZM47.0601 7.09979H46.0657V1.83296H44.3364V0.900289H48.7894V1.83296H47.0601V7.09979ZM43.7068 7.08982H39.8936V0.900289H43.7068V1.83296H40.8906V3.5337H43.4319V4.4564H40.8906V6.15715H43.7068V7.08982ZM61.9711 5.65091C62.4156 6.08233 62.9552 6.29929 63.5822 6.29929C64.2271 6.29929 64.7539 6.08732 65.1933 5.65091C65.6301 5.22697 65.8511 4.67086 65.8511 4.00004C65.8511 3.32922 65.6301 2.77061 65.1958 2.34917C64.7513 1.91774 64.2091 1.70079 63.5847 1.70079C62.9398 1.70079 62.413 1.91276 61.9762 2.34917C61.5394 2.77311 61.3184 3.32922 61.3184 4.00004C61.3184 4.67086 61.5368 5.22947 61.9711 5.65091Z" fill="white" class="app-link__text"/><path fill-rule="evenodd" clip-rule="evenodd" d="M60.2029 15.7554C57.7747 15.7554 55.8064 17.5434 55.8064 20.0098C55.8064 22.4537 57.7875 24.2641 60.2029 24.2641C62.6312 24.2641 64.5994 22.4636 64.5994 20.0098C64.5994 17.5434 62.6312 15.7554 60.2029 15.7554ZM60.2029 22.5784C58.8745 22.5784 57.731 21.511 57.731 19.9998C57.731 18.4661 58.877 17.4213 60.2029 17.4213C61.5314 17.4213 62.6748 18.4661 62.6748 19.9998C62.6774 21.521 61.5314 22.5784 60.2029 22.5784ZM50.6108 15.7554C48.1826 15.7554 46.2143 17.5434 46.2143 20.0098C46.2143 22.4537 48.1954 24.2641 50.6108 24.2641C53.039 24.2641 55.0073 22.4636 55.0073 20.0098C55.0073 17.5434 53.0364 15.7554 50.6108 15.7554ZM50.6108 22.5784C49.2823 22.5784 48.1389 21.511 48.1389 19.9998C48.1389 18.4661 49.2849 17.4213 50.6108 17.4213C51.9392 17.4213 53.0827 18.4661 53.0827 19.9998C53.0827 21.521 51.9392 22.5784 50.6108 22.5784ZM39.1968 17.0547V18.8552H43.6499C43.5137 19.8651 43.1694 20.6108 42.6426 21.122C41.9899 21.7554 40.9827 22.4437 39.2071 22.4437C36.4705 22.4437 34.3301 20.2991 34.3301 17.6432C34.3301 14.9873 36.4705 12.8427 39.2071 12.8427C40.6846 12.8427 41.7612 13.4088 42.5604 14.132L43.876 12.8552C42.7659 11.8227 41.2884 11.0322 39.2174 11.0322C35.4633 11.0322 32.313 13.9998 32.313 17.6332C32.313 21.2766 35.4607 24.2342 39.2174 24.2342C41.2448 24.2342 42.7659 23.5908 43.9685 22.3789C45.1942 21.1893 45.5822 19.511 45.5822 18.1569C45.5822 17.7355 45.5488 17.3564 45.4794 17.0347H39.1943C39.1968 17.0322 39.1968 17.0547 39.1968 17.0547ZM85.883 18.4562C85.5156 17.5011 84.4055 15.7454 82.1289 15.7454C79.8729 15.7454 77.9971 17.4686 77.9971 19.9998C77.9971 22.3888 79.8523 24.2542 82.3473 24.2542C84.3516 24.2542 85.5182 23.0646 85.9987 22.3664L84.5109 21.3988C84.0176 22.1095 83.3315 22.5759 82.3576 22.5759C81.3735 22.5759 80.6848 22.142 80.2275 21.2866L86.0886 18.93C86.0886 18.9325 85.883 18.4562 85.883 18.4562ZM79.9063 19.8776C79.86 18.2342 81.2219 17.3988 82.1957 17.3988C82.964 17.3988 83.6039 17.7654 83.8223 18.2991L79.9063 19.8776ZM75.1449 23.9998H77.0695V11.5011H75.1449V23.9998ZM71.9843 16.7006H71.9149C71.4807 16.1993 70.6559 15.7454 69.6023 15.7454C67.4157 15.7454 65.4011 17.6133 65.4011 20.0123C65.4011 22.4013 67.4054 24.2467 69.6023 24.2467C70.643 24.2467 71.4807 23.7903 71.9149 23.2791H71.9843V23.8901C71.9843 25.5135 71.0901 26.3888 69.6486 26.3888C68.4692 26.3888 67.7369 25.5659 67.4388 24.8776L65.766 25.5559C66.2465 26.6781 67.5287 28.0671 69.646 28.0671C71.9021 28.0671 73.8139 26.7779 73.8139 23.6332V15.9998H71.9946V16.7006C71.9972 16.7006 71.9843 16.7006 71.9843 16.7006ZM69.7745 22.5784C68.4461 22.5784 67.336 21.5011 67.336 20.0123C67.336 18.511 68.4461 17.4237 69.7745 17.4237C71.0901 17.4237 72.1102 18.5235 72.1102 20.0123C72.1231 21.5011 71.0927 22.5784 69.7745 22.5784ZM94.8945 11.5011H90.2924V23.9998H92.217V19.2666H94.897C97.0272 19.2666 99.1214 17.7679 99.1214 15.3888C99.1214 13.0098 97.0349 11.5011 94.8945 11.5011ZM94.951 17.521H92.2144V13.2317H94.951C96.3925 13.2317 97.2071 14.3863 97.2071 15.3764C97.2071 16.3564 96.3822 17.521 94.951 17.521ZM106.835 15.733C105.437 15.733 103.996 16.334 103.4 17.6432L105.106 18.3315C105.473 17.6432 106.147 17.4088 106.858 17.4088C107.855 17.4088 108.863 17.9873 108.886 19.0198V19.1519C108.541 18.9624 107.786 18.6731 106.881 18.6731C105.039 18.6731 103.171 19.6507 103.171 21.4836C103.171 23.1619 104.682 24.2392 106.365 24.2392C107.657 24.2392 108.369 23.6731 108.814 23.0173H108.883V23.9848H110.738V19.1968C110.738 16.9674 109.032 15.733 106.835 15.733ZM106.594 22.5784C105.964 22.5784 105.083 22.2791 105.083 21.511C105.083 20.5434 106.183 20.1769 107.12 20.1769C107.968 20.1769 108.369 20.3539 108.873 20.5983C108.734 21.7205 107.758 22.5684 106.594 22.5784ZM117.507 15.9998L115.297 21.4213H115.227L112.938 15.9998H110.867L114.302 23.5784L112.344 27.7903H114.349L119.634 15.9998H117.507ZM100.183 23.9998H102.107V11.5011H100.183V23.9998Z" class="app-link__text" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M0.751966 1.53315C0.453898 1.84487 0.281738 2.32118 0.281738 2.94462V25.0568C0.281738 25.6803 0.453898 26.1566 0.762244 26.4558L0.8419 26.5232L13.6074 14.1342V13.8573L0.831622 1.46582L0.751966 1.53315Z" fill="url(#paint0_linear_180_1697)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.8544 18.2772L13.5967 14.1451V13.8558L17.8544 9.72363L17.947 9.7785L22.9833 12.5566C24.4248 13.3446 24.4248 14.6463 22.9833 15.4443L17.947 18.2224L17.8544 18.2772Z" fill="url(#paint1_linear_180_1697)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.9481 18.2219L13.5979 14L0.752686 26.4663C1.22291 26.9551 2.01177 27.01 2.89312 26.5337L17.9481 18.2219Z" fill="url(#paint2_linear_180_1697)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.9481 9.77844L2.89312 1.47918C2.01177 0.990404 1.22034 1.05774 0.752686 1.54651L13.5979 14.0004L17.9481 9.77844Z" fill="url(#paint3_linear_180_1697)"/><path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M17.8557 18.1318L2.90339 26.3762C2.06828 26.8425 1.3231 26.8101 0.842596 26.3862L0.762939 26.4635L0.842596 26.5308C1.3231 26.9523 2.06828 26.9872 2.90339 26.5208L17.9585 18.2216L17.8557 18.1318Z" fill="white"/><path opacity="0.12" fill-rule="evenodd" clip-rule="evenodd" d="M22.984 15.2993L17.8423 18.1322L17.9348 18.2219L22.9711 15.4439C23.6931 15.0449 24.0477 14.5212 24.0477 14C24.0041 14.4788 23.6366 14.9327 22.984 15.2993Z" fill="white"/><path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M2.8924 1.62329L22.9837 12.7006C23.6364 13.0572 24.0038 13.5235 24.0604 13.9999C24.0604 13.4787 23.7058 12.955 22.9837 12.556L2.8924 1.47866C1.45088 0.678157 0.281738 1.34649 0.281738 2.94499V3.08963C0.281738 1.48863 1.45088 0.832771 2.8924 1.62329Z" fill="white"/><defs><linearGradient id="paint0_linear_180_1697" x1="12.4624" y1="2.70606" x2="-7.90249" y2="8.29721" gradientUnits="userSpaceOnUse"><stop stop-color="#00A0FF"/><stop offset="0.00657" stop-color="#00A1FF"/><stop offset="0.2601" stop-color="#00BEFF"/><stop offset="0.5122" stop-color="#00D2FF"/><stop offset="0.7604" stop-color="#00DFFF"/><stop offset="1" stop-color="#00E3FF"/></linearGradient><linearGradient id="paint1_linear_180_1697" x1="24.8632" y1="14.0005" x2="-0.0691643" y2="14.0005" gradientUnits="userSpaceOnUse"><stop stop-color="#FFE000"/><stop offset="0.4087" stop-color="#FFBD00"/><stop offset="0.7754" stop-color="#FFA500"/><stop offset="1" stop-color="#FF9C00"/></linearGradient><linearGradient id="paint2_linear_180_1697" x1="15.5826" y1="16.2973" x2="-0.117088" y2="43.5243" gradientUnits="userSpaceOnUse"><stop stop-color="#FF3A44"/><stop offset="1" stop-color="#C31162"/></linearGradient><linearGradient id="paint3_linear_180_1697" x1="-2.48187" y1="-5.82083" x2="4.52223" y2="6.33885" gradientUnits="userSpaceOnUse"><stop stop-color="#32A071"/><stop offset="0.0685" stop-color="#2DA771"/><stop offset="0.4762" stop-color="#15CF74"/><stop offset="0.8009" stop-color="#06E775"/><stop offset="1" stop-color="#00F076"/></linearGradient></defs></svg>
                    </a>
                    <div class="mb-3"></div>
                    <a href="https://apps.apple.com/ru/app/uniapp/id1534235042" target="_blank" class="app-link app-link--apple">
                        <svg width="104" height="27" viewBox="0 0 104 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.2321 12.8887C16.2437 12.0208 16.4822 11.1697 16.9255 10.4148C17.3688 9.65989 18.0025 9.02562 18.7676 8.571C18.2815 7.9001 17.6404 7.34798 16.8949 6.95849C16.1495 6.56899 15.3204 6.35286 14.4734 6.32724C12.6667 6.14394 10.9152 7.37216 9.99451 7.37216C9.05602 7.37216 7.63851 6.34544 6.11207 6.37579C5.12474 6.40662 4.1625 6.68413 3.31912 7.18126C2.47573 7.67839 1.77997 8.3782 1.29961 9.21249C-0.781157 12.6945 0.770909 17.8119 2.76414 20.6265C3.76141 22.0047 4.92691 23.5442 6.45197 23.4896C7.94433 23.4298 8.50169 22.5699 10.3031 22.5699C12.0878 22.5699 12.6107 23.4896 14.1667 23.4549C15.7681 23.4298 16.777 22.0706 17.7393 20.6793C18.4558 19.6973 19.0072 18.6119 19.373 17.4634C18.4426 17.0831 17.6487 16.4465 17.0901 15.633C16.5316 14.8195 16.2332 13.865 16.2321 12.8887Z" fill="white"/><path d="M13.2943 4.47657C14.1675 3.4635 14.5976 2.16135 14.4935 0.84668C13.1595 0.982095 11.9273 1.59829 11.0424 2.5725C10.6097 3.04842 10.2784 3.6021 10.0672 4.20189C9.85607 4.80167 9.76931 5.43579 9.81188 6.068C10.4791 6.07464 11.1392 5.93486 11.7424 5.6592C12.3456 5.38354 12.8762 4.97918 13.2943 4.47657Z" fill="white"/><path d="M34.1374 20.1397H29.2401L28.064 23.4962H25.9897L30.6284 11.0782H32.7835L37.4222 23.4962H35.3125L34.1374 20.1397ZM29.7473 18.5909H33.6293L31.7156 13.1436H31.662L29.7473 18.5909Z" fill="white"/><path d="M47.4413 18.9695C47.4413 21.7829 45.8833 23.5905 43.5321 23.5905C42.9365 23.6207 42.3442 23.4881 41.8229 23.2079C41.3017 22.9278 40.8726 22.5114 40.5848 22.0065H40.5403V26.4909H38.6176V14.4421H40.4787V15.948H40.5141C40.8151 15.4455 41.2514 15.0313 41.7766 14.7495C42.3018 14.4676 42.8963 14.3287 43.4967 14.3474C45.8742 14.3474 47.4413 16.1638 47.4413 18.9695ZM45.465 18.9695C45.465 17.1365 44.4849 15.9314 42.9895 15.9314C41.5204 15.9314 40.5323 17.1618 40.5323 18.9695C40.5323 20.7937 41.5204 22.0154 42.9895 22.0154C44.4849 22.0154 45.465 20.8191 45.465 18.9695Z" fill="white"/><path d="M57.7517 18.9695C57.7517 21.7829 56.1931 23.5905 53.842 23.5905C53.2464 23.6207 52.6541 23.4881 52.1328 23.2079C51.6116 22.9278 51.1825 22.5114 50.8947 22.0065H50.8502V26.4909H48.9274V14.4421H50.7886V15.948H50.8239C51.125 15.4455 51.5613 15.0313 52.0865 14.7495C52.6117 14.4676 53.2062 14.3287 53.8066 14.3474C56.1841 14.3474 57.7517 16.1638 57.7517 18.9695ZM55.7748 18.9695C55.7748 17.1365 54.7948 15.9314 53.2994 15.9314C51.8303 15.9314 50.8421 17.1618 50.8421 18.9695C50.8421 20.7937 51.8303 22.0154 53.2994 22.0154C54.7948 22.0154 55.7748 20.8191 55.7748 18.9695Z" fill="white"/><path d="M64.5644 20.0362C64.7069 21.2676 65.9446 22.0762 67.636 22.0762C69.2566 22.0762 70.4226 21.2676 70.4226 20.1572C70.4226 19.1934 69.7194 18.6162 68.0543 18.2207L66.3892 17.833C64.0299 17.2822 62.9347 16.2158 62.9347 14.4854C62.9347 12.3428 64.8665 10.8711 67.6087 10.8711C70.3246 10.8711 72.1857 12.3428 72.2484 14.4854H70.3074C70.1912 13.2461 69.1313 12.4981 67.5824 12.4981C66.0335 12.4981 64.9736 13.2549 64.9736 14.3565C64.9736 15.2344 65.6506 15.751 67.3066 16.1465L68.7221 16.4824C71.3582 17.0849 72.4525 18.1084 72.4525 19.9248C72.4525 22.248 70.5388 23.7031 67.4935 23.7031C64.6442 23.7031 62.7204 22.2822 62.5961 20.0361L64.5644 20.0362Z" fill="white"/><path d="M76.604 12.2998V14.4424H78.3854V15.9141H76.604V20.9053C76.604 21.6807 76.9607 22.042 77.7438 22.042C77.9552 22.0384 78.1664 22.0241 78.3763 21.999V23.4619C78.0242 23.5255 77.6664 23.5543 77.3083 23.5478C75.4118 23.5478 74.6722 22.8593 74.6722 21.1035V15.9141H73.3102V14.4424H74.6722V12.2998H76.604Z" fill="white"/><path d="M79.4146 18.9697C79.4146 16.1211 81.1505 14.3311 83.8573 14.3311C86.5732 14.3311 88.301 16.1211 88.301 18.9697C88.301 21.8262 86.5823 23.6084 83.8573 23.6084C81.1333 23.6084 79.4146 21.8262 79.4146 18.9697ZM86.3418 18.9697C86.3418 17.0156 85.4153 15.8623 83.8573 15.8623C82.2993 15.8623 81.3728 17.0244 81.3728 18.9697C81.3728 20.9316 82.2993 22.0762 83.8573 22.0762C85.4153 22.0762 86.3418 20.9316 86.3418 18.9697Z" fill="white"/><path d="M89.8863 14.442H91.7202V15.983H91.7647C91.8887 15.5017 92.1804 15.0764 92.5908 14.7785C93.0011 14.4806 93.505 14.3284 94.0178 14.3473C94.2394 14.3465 94.4604 14.3698 94.6766 14.4166V16.1549C94.3968 16.0723 94.105 16.0343 93.8127 16.0426C93.5333 16.0316 93.2549 16.0792 92.9964 16.1821C92.7379 16.285 92.5055 16.4408 92.3151 16.6386C92.1248 16.8365 91.981 17.0719 91.8936 17.3286C91.8063 17.5852 91.7774 17.8571 91.8091 18.1256V23.4957H89.8863L89.8863 14.442Z" fill="white"/><path d="M103.541 20.8369C103.283 22.4805 101.627 23.6084 99.508 23.6084C96.783 23.6084 95.0916 21.8437 95.0916 19.0127C95.0916 16.1729 96.7921 14.3311 99.4272 14.3311C102.019 14.3311 103.649 16.0518 103.649 18.7969V19.4336H97.0326V19.5459C97.002 19.8791 97.0452 20.2148 97.1592 20.5306C97.2732 20.8464 97.4554 21.1352 97.6937 21.3778C97.9321 21.6203 98.2211 21.8111 98.5415 21.9374C98.862 22.0637 99.2066 22.1226 99.5525 22.1103C100.007 22.1515 100.463 22.0498 100.853 21.8203C101.242 21.5909 101.545 21.246 101.716 20.8369L103.541 20.8369ZM97.0417 18.1348H101.725C101.742 17.8352 101.695 17.5354 101.587 17.2541C101.478 16.9729 101.311 16.7164 101.095 16.5006C100.88 16.2849 100.62 16.1145 100.333 16.0003C100.046 15.8861 99.7376 15.8305 99.4272 15.8369C99.1141 15.8351 98.8037 15.8933 98.514 16.008C98.2242 16.1227 97.9609 16.2918 97.7391 16.5054C97.5173 16.7191 97.3415 16.973 97.2218 17.2527C97.1021 17.5323 97.0409 17.8321 97.0417 18.1348Z" fill="white"/><path d="M29.5065 1.73052C29.9096 1.70256 30.3141 1.76142 30.6908 1.90286C31.0675 2.04429 31.4071 2.26477 31.685 2.54839C31.9629 2.83202 32.1722 3.17172 32.2978 3.54299C32.4234 3.91426 32.4622 4.30785 32.4113 4.69536C32.4113 6.60161 31.3454 7.69736 29.5065 7.69736H27.2766V1.73052H29.5065ZM28.2354 6.85352H29.3994C29.6874 6.87016 29.9757 6.82452 30.2432 6.7199C30.5107 6.61529 30.7507 6.45434 30.9457 6.24877C31.1407 6.04321 31.2858 5.7982 31.3705 5.53158C31.4552 5.26496 31.4774 4.98345 31.4353 4.70752C31.4743 4.43269 31.4499 4.15292 31.3639 3.88825C31.2779 3.62359 31.1324 3.38059 30.9379 3.17666C30.7433 2.97273 30.5045 2.81292 30.2385 2.70868C29.9725 2.60445 29.6859 2.55836 29.3994 2.57373H28.2354V6.85352Z" fill="white"/><path d="M33.495 5.4438C33.4657 5.14788 33.5008 4.84931 33.5979 4.56724C33.6949 4.28518 33.852 4.02583 34.0588 3.80585C34.2657 3.58587 34.5178 3.4101 34.7991 3.28983C35.0804 3.16955 35.3845 3.10742 35.6921 3.10742C35.9997 3.10742 36.3038 3.16955 36.5851 3.28983C36.8664 3.4101 37.1185 3.58587 37.3254 3.80585C37.5323 4.02583 37.6893 4.28518 37.7864 4.56724C37.8835 4.84931 37.9185 5.14788 37.8892 5.4438C37.919 5.74002 37.8844 6.039 37.7876 6.32153C37.6908 6.60405 37.5338 6.86387 37.3269 7.08429C37.12 7.3047 36.8677 7.48083 36.5861 7.60137C36.3046 7.7219 36 7.78417 35.6921 7.78417C35.3842 7.78417 35.0797 7.7219 34.7981 7.60137C34.5166 7.48083 34.2642 7.3047 34.0573 7.08429C33.8504 6.86387 33.6935 6.60405 33.5966 6.32153C33.4998 6.039 33.4652 5.74002 33.495 5.4438ZM36.9435 5.4438C36.9435 4.46773 36.4898 3.89693 35.6936 3.89693C34.8944 3.89693 34.4448 4.46773 34.4448 5.44381C34.4448 6.4277 34.8944 6.9941 35.6936 6.9941C36.4898 6.99409 36.9435 6.42378 36.9435 5.4438Z" fill="white"/><path d="M43.7298 7.69727H42.776L41.8131 4.38086H41.7403L40.7815 7.69727H39.8368L38.5526 3.19434H39.4852L40.3197 6.63034H40.3885L41.3463 3.19434H42.2284L43.1862 6.63034H43.259L44.0895 3.19434H45.0089L43.7298 7.69727Z" fill="white"/><path d="M46.0903 3.19389H46.9754V3.90922H47.0441C47.1607 3.6523 47.3572 3.43693 47.6065 3.29312C47.8557 3.14932 48.1451 3.08424 48.4344 3.10697C48.6611 3.0905 48.8887 3.12353 49.1004 3.20363C49.3121 3.28373 49.5024 3.40883 49.6573 3.56967C49.8121 3.73052 49.9276 3.92298 49.995 4.1328C50.0625 4.34262 50.0802 4.56442 50.047 4.78177V7.69677H49.1275V5.00493C49.1275 4.2813 48.8022 3.92143 48.1222 3.92143C47.9683 3.9145 47.8146 3.93982 47.6718 3.99565C47.529 4.05148 47.4003 4.1365 47.2946 4.24489C47.189 4.35327 47.1088 4.48246 47.0596 4.62359C47.0105 4.76472 46.9934 4.91446 47.0097 5.06254V7.69682H46.0903L46.0903 3.19389Z" fill="white"/><path d="M51.5099 1.43652H52.4294V7.69726H51.5099V1.43652Z" fill="white"/><path d="M53.7089 5.44388C53.6797 5.14795 53.7147 4.84936 53.8118 4.56728C53.9089 4.2852 54.066 4.02585 54.2729 3.80586C54.4798 3.58588 54.7319 3.41011 55.0132 3.28983C55.2945 3.16955 55.5987 3.10742 55.9063 3.10742C56.2139 3.10742 56.5181 3.16955 56.7993 3.28983C57.0806 3.41011 57.3328 3.58588 57.5397 3.80586C57.7466 4.02585 57.9036 4.2852 58.0007 4.56728C58.0978 4.84936 58.1329 5.14795 58.1036 5.44388C58.1334 5.74012 58.0988 6.0391 58.0019 6.32163C57.9051 6.60415 57.7481 6.86396 57.5412 7.08437C57.3342 7.30478 57.0819 7.48091 56.8003 7.60143C56.5187 7.72196 56.2142 7.78423 55.9063 7.78423C55.5983 7.78423 55.2938 7.72196 55.0122 7.60143C54.7307 7.48091 54.4783 7.30478 54.2714 7.08437C54.0644 6.86396 53.9075 6.60415 53.8106 6.32163C53.7138 6.0391 53.6791 5.74012 53.7089 5.44388ZM57.1574 5.44388C57.1574 4.46781 56.7037 3.89701 55.9075 3.89701C55.1083 3.89701 54.6587 4.46781 54.6587 5.44389C54.6587 6.42778 55.1084 6.99418 55.9075 6.99418C56.7037 6.99417 57.1574 6.42386 57.1574 5.44388Z" fill="white"/><path d="M59.0715 6.42382C59.0715 5.61327 59.6959 5.14599 60.8043 5.07958L62.0663 5.00927V4.6206C62.0663 4.14501 61.741 3.87646 61.1125 3.87646C60.5992 3.87646 60.2436 4.05859 60.1415 4.37695H59.2514C59.3453 3.60351 60.0981 3.10742 61.1549 3.10742C62.3229 3.10742 62.9817 3.66942 62.9817 4.6206V7.69726H62.0966V7.06445H62.0239C61.8762 7.29144 61.6689 7.47649 61.423 7.6007C61.1772 7.72491 60.9016 7.78384 60.6245 7.77145C60.4289 7.79111 60.2312 7.77095 60.0442 7.71225C59.8572 7.65355 59.685 7.55762 59.5386 7.43065C59.3923 7.30369 59.2752 7.14849 59.1947 6.97508C59.1143 6.80166 59.0723 6.61387 59.0715 6.42382ZM62.0663 6.03905V5.66259L60.9286 5.7329C60.287 5.7744 59.996 5.98534 59.996 6.38231C59.996 6.78758 60.3597 7.02342 60.8599 7.02342C61.0065 7.03776 61.1545 7.02346 61.2952 6.98137C61.4359 6.93928 61.5665 6.87026 61.679 6.77842C61.7916 6.68658 61.8839 6.57379 61.9504 6.44677C62.0169 6.31975 62.0563 6.1811 62.0663 6.03905Z" fill="white"/><path d="M64.1904 5.44386C64.1904 4.02101 64.9472 3.11964 66.1243 3.11964C66.4154 3.10668 66.7044 3.17408 66.9574 3.31397C67.2104 3.45387 67.4169 3.66047 67.5529 3.90964H67.6217V1.43652H68.5411V7.69726H67.6601V6.98583H67.5873C67.4408 7.23332 67.227 7.43736 66.9691 7.57584C66.7113 7.71432 66.4191 7.78198 66.1243 7.77147C64.9391 7.77152 64.1904 6.87013 64.1904 5.44386ZM65.1402 5.44386C65.1402 6.39894 65.606 6.97365 66.385 6.97365C67.1599 6.97365 67.6389 6.39065 67.6389 5.44777C67.6389 4.50929 67.1549 3.91798 66.385 3.91798C65.611 3.91798 65.1402 4.49659 65.1402 5.44386Z" fill="white"/><path d="M72.3443 5.44392C72.315 5.148 72.35 4.84944 72.4471 4.56737C72.5442 4.2853 72.7012 4.02596 72.9081 3.80597C73.1149 3.58599 73.3671 3.41022 73.6484 3.28995C73.9296 3.16967 74.2338 3.10754 74.5414 3.10754C74.8489 3.10754 75.1531 3.16967 75.4344 3.28995C75.7156 3.41022 75.9678 3.58599 76.1746 3.80597C76.3815 4.02596 76.5385 4.2853 76.6356 4.56737C76.7327 4.84944 76.7677 5.148 76.7384 5.44392C76.7683 5.74014 76.7337 6.03913 76.6368 6.32165C76.54 6.60418 76.3831 6.86399 76.1762 7.08441C75.9693 7.30482 75.7169 7.48096 75.4354 7.60149C75.1538 7.72203 74.8493 7.78429 74.5414 7.78429C74.2334 7.78429 73.9289 7.72203 73.6474 7.60149C73.3658 7.48096 73.1135 7.30482 72.9065 7.08441C72.6996 6.86399 72.5427 6.60418 72.4459 6.32165C72.349 6.03913 72.3144 5.74014 72.3443 5.44392ZM75.7927 5.44392C75.7927 4.46785 75.339 3.89705 74.5429 3.89705C73.7437 3.89705 73.2941 4.46785 73.2941 5.44393C73.2941 6.42782 73.7437 6.99422 74.5429 6.99422C75.3391 6.99421 75.7927 6.4239 75.7927 5.44392Z" fill="white"/><path d="M77.9721 3.19389H78.8572V3.90922H78.9259C79.0424 3.6523 79.239 3.43693 79.4882 3.29312C79.7374 3.14932 80.0269 3.08424 80.3162 3.10697C80.5428 3.0905 80.7705 3.12353 80.9821 3.20363C81.1938 3.28373 81.3842 3.40883 81.539 3.56967C81.6939 3.73052 81.8093 3.92298 81.8768 4.1328C81.9443 4.34262 81.962 4.56442 81.9287 4.78177V7.69677H81.0093V5.00493C81.0093 4.2813 80.6839 3.92143 80.004 3.92143C79.85 3.9145 79.6964 3.93982 79.5536 3.99565C79.4107 4.05148 79.2821 4.1365 79.1764 4.24489C79.0707 4.35327 78.9906 4.48246 78.9414 4.62359C78.8922 4.76472 78.8752 4.91446 78.8915 5.06254V7.69682H77.9721V3.19389Z" fill="white"/><path d="M87.1248 2.07324V3.21484H88.1341V3.96338H87.1248V6.27881C87.1248 6.75049 87.3258 6.95703 87.7835 6.95703C87.9007 6.95667 88.0178 6.94982 88.1341 6.93652V7.67675C87.969 7.7053 87.8017 7.72049 87.634 7.72216C86.6115 7.72216 86.2043 7.3745 86.2043 6.50634V3.96334H85.4647V3.2148H86.2043V2.07324H87.1248Z" fill="white"/><path d="M89.389 1.43652H90.3003V3.91797H90.3731C90.4953 3.65865 90.6973 3.44206 90.9515 3.29771C91.2057 3.15337 91.4998 3.08828 91.7936 3.11133C92.0191 3.09947 92.2446 3.13586 92.4539 3.2179C92.6632 3.29995 92.8511 3.42562 93.0044 3.58596C93.1576 3.74629 93.2724 3.93735 93.3404 4.14548C93.4085 4.35362 93.4282 4.5737 93.3981 4.79004V7.69727H92.4778V5.00927C92.4778 4.29003 92.1312 3.92577 91.4815 3.92577C91.3235 3.91325 91.1645 3.93424 91.0158 3.9873C90.867 4.04035 90.7321 4.12418 90.6203 4.23292C90.5086 4.34165 90.4228 4.47268 90.3689 4.61681C90.3151 4.76095 90.2944 4.91472 90.3085 5.06737V7.69725H89.389L89.389 1.43652Z" fill="white"/><path d="M98.759 6.48152C98.6341 6.89306 98.3635 7.24904 97.9944 7.48719C97.6254 7.72534 97.1815 7.83049 96.7403 7.78425C96.4334 7.79208 96.1283 7.73526 95.8464 7.61773C95.5645 7.5002 95.3124 7.32478 95.1076 7.10364C94.9028 6.8825 94.7503 6.62095 94.6606 6.33713C94.5709 6.0533 94.5462 5.75402 94.5882 5.46004C94.5473 5.16515 94.5725 4.86522 94.6619 4.58055C94.7514 4.29587 94.9031 4.03311 95.1068 3.81003C95.3105 3.58696 95.5614 3.40879 95.8425 3.28758C96.1237 3.16637 96.4284 3.10496 96.7363 3.1075C98.0326 3.1075 98.8146 3.9635 98.8146 5.3775V5.68759H95.5248V5.73739C95.5104 5.90263 95.5319 6.06896 95.5879 6.22571C95.6439 6.38246 95.7332 6.52617 95.85 6.64763C95.9668 6.76908 96.1086 6.8656 96.2663 6.931C96.4239 6.9964 96.594 7.02923 96.7656 7.02739C96.9855 7.05291 97.2083 7.01463 97.4057 6.91742C97.603 6.82022 97.766 6.66847 97.8739 6.48149L98.759 6.48152ZM95.5248 5.03035H97.878C97.8896 4.87922 97.8683 4.72742 97.8156 4.5847C97.7629 4.44198 97.6798 4.3115 97.5718 4.20165C97.4638 4.09179 97.3332 4.00498 97.1885 3.94681C97.0437 3.88863 96.8879 3.86037 96.7312 3.86385C96.5722 3.86192 96.4143 3.89077 96.267 3.94872C96.1197 4.00666 95.9859 4.09252 95.8735 4.20124C95.7611 4.30995 95.6723 4.43932 95.6124 4.58171C95.5525 4.72411 95.5227 4.87665 95.5248 5.03035Z" fill="white"/></svg>
                    </a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.upper-footer -->
    <div class="bottom-footer">
        <div class="container">
            <div class="bottom-footer__inner">
                <p class="bottom-footer__text">© Copyrights, {{ date('Y') }} Uniphone</p>
                {{--<p class="bottom-footer__text"><a href="#">Terms & Condition</a>
                    <a href="#">Privacy Policy</a>
                </p>--}}
            </div><!-- /.bottom-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.bottom-footer -->
</footer><!-- /.main-footer -->
