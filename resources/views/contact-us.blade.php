@extends('layouts.landing.app')
@section('contact','active')
@section('title',translate('messages.contact_us'))

@section('content')


        <!-- Page Header Gap -->
        <div class="h-148px"></div>
        <!-- Page Header Gap -->

        <!-- ======= Contact Section ======= -->
        <section class="contact-section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="section-wrapper-inner">
                        <div class="section-header text-center">
                            <h2 class="title"> <span class="text-base">{{translate('messages.contact_us')}}</span></h2>
                        </div>
                        <div class="row g-4 gy-5 justify-content-center">
                            <div class="col-lg-4 col-md-10">
                                <div class="contact-item">
                                    <div class="contact-item-icon">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.625 3.75C5.625 2.75544 6.02009 1.80161 6.72335 1.09835C7.42661 0.395088 8.38044 0 9.375 0L20.625 0C21.6196 0 22.5734 0.395088 23.2766 1.09835C23.9799 1.80161 24.375 2.75544 24.375 3.75V26.25C24.375 27.2446 23.9799 28.1984 23.2766 28.9016C22.5734 29.6049 21.6196 30 20.625 30H9.375C8.38044 30 7.42661 29.6049 6.72335 28.9016C6.02009 28.1984 5.625 27.2446 5.625 26.25V3.75ZM16.875 24.375C16.875 23.8777 16.6775 23.4008 16.3258 23.0492C15.9742 22.6975 15.4973 22.5 15 22.5C14.5027 22.5 14.0258 22.6975 13.6742 23.0492C13.3225 23.4008 13.125 23.8777 13.125 24.375C13.125 24.8723 13.3225 25.3492 13.6742 25.7008C14.0258 26.0525 14.5027 26.25 15 26.25C15.4973 26.25 15.9742 26.0525 16.3258 25.7008C16.6775 25.3492 16.875 24.8723 16.875 24.375Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">{{translate('messages.Call_us')}}</h5>
                                        <a href="tel:{{\App\CentralLogics\Helpers::get_settings('phone')}}" class="info text-base">{{\App\CentralLogics\Helpers::get_settings('phone')}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-10">
                                <div class="contact-item">
                                    <div class="contact-item-icon">
                                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.5 0.625C3.50544 0.625 2.55161 1.02009 1.84835 1.72335C1.14509 2.42661 0.75 3.38044 0.75 4.375V4.75188L12 10.81L23.25 4.75375V4.375C23.25 3.38044 22.8549 2.42661 22.1516 1.72335C21.4484 1.02009 20.4946 0.625 19.5 0.625H4.5ZM23.25 6.88188L12.4444 12.7C12.3078 12.7735 12.1551 12.812 12 12.812C11.8449 12.812 11.6922 12.7735 11.5556 12.7L0.75 6.88188V15.625C0.75 16.6196 1.14509 17.5734 1.84835 18.2766C2.55161 18.9799 3.50544 19.375 4.5 19.375H19.5C20.4946 19.375 21.4484 18.9799 22.1516 18.2766C22.8549 17.5734 23.25 16.6196 23.25 15.625V6.88188Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">{{translate('messages.mail_us')}}</h5>
                                        <a href="mailto:{{\App\CentralLogics\Helpers::get_settings('email_address')}}" class="info text-base">{{\App\CentralLogics\Helpers::get_settings('email_address')}}</a>
                                    </div>
                                </div>
                            </div>
                            @php( $default_location = \App\CentralLogics\Helpers::get_business_settings('default_location'))

                            <div class="col-lg-4 col-md-10">
                                <div class="contact-item">
                                    <div class="contact-item-icon">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3_6812)">
                                                <path
                                                    d="M29.0506 27.153L27 21H24.7501L25.9995 27H4.00055L5.25005 21H3.00005L0.948052 27.153C0.427552 28.719 1.35005 30 3.00005 30H27C28.65 30 29.5725 28.719 29.0506 27.153ZM22.5001 7.5C22.5001 5.51088 21.7099 3.60322 20.3034 2.1967C18.8968 0.790176 16.9892 0 15.0001 0C13.0109 0 11.1033 0.790176 9.69675 2.1967C8.29023 3.60322 7.50005 5.51088 7.50005 7.5C7.50005 14.6625 15.0001 22.5 15.0001 22.5C15.0001 22.5 22.5001 14.6625 22.5001 7.5ZM10.9501 7.59C10.9501 7.05822 11.0548 6.53164 11.2584 6.04036C11.4619 5.54908 11.7603 5.10271 12.1364 4.72675C12.5125 4.35079 12.9589 4.05261 13.4503 3.84924C13.9417 3.64588 14.4683 3.5413 15.0001 3.5415C16.074 3.5415 17.1039 3.96812 17.8633 4.7275C18.6227 5.48688 19.0493 6.51682 19.0493 7.59075C19.0493 8.66468 18.6227 9.69462 17.8633 10.454C17.1039 11.2134 16.074 11.64 15.0001 11.64C13.9259 11.64 12.8958 11.2133 12.1363 10.4538C11.3767 9.69426 10.9501 8.66413 10.9501 7.59Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3_6812">
                                                    <rect width="30" height="30" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <div class="content">
                                        <h5 class="name">{{translate('messages.find_us')}}</h5>
                                        <a href="http://maps.google.com/maps?z=12&t=m&q=loc:{{ isset($default_location['lat']) ? $default_location['lat'] : '0' }}+{{ isset($default_location['lng']) ? $default_location['lng'] : '0' }}" target="_blank"
                                        class="info text-base">{{\App\CentralLogics\Helpers::get_settings('address')}}
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-80">
                            <div class="row justify-content-center g-4">
                                <div class="col-lg-6 col-md-10">
                                    <form action="{{  route('contact-us') }}"  method="post" id="contact-form-id">
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-lg-12">
                                                <label class="d-block mb-2">
                                                    {{ translate('messages.Type_here') }}
                                                </label>
                                                <input type="text" required name="name" class="form-control form--control" placeholder="{{ translate('Name')  }}">
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="email" required name="email" class="form-control form--control"
                                                    placeholder="{{ translate('Email Address')  }}">
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea class="form-control form--control"
                                                  required name="message" placeholder="{{ translate('Type your message here')  }}"></textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                @php($recaptcha = \App\CentralLogics\Helpers::get_business_settings('recaptcha'))
                                                @if(isset($recaptcha) && $recaptcha['status'] == 1)
                                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                                                    <input type="hidden" name="set_default_captcha" id="set_default_captcha_value" value="0" >
                                                    <div class="row p-2 d-none" id="reload-captcha">
                                                        <div class="col-6 pr-0">
                                                            <input type="text" class="form-control form-control-lg border-0" name="custome_recaptcha"
                                                                   id="custome_recaptcha" required placeholder="{{translate('Enter recaptcha value')}}" autocomplete="off" value="{{env('APP_MODE')=='dev'? session('six_captcha'):''}}">
                                                        </div>
                                                        <div class="col-6 bg-white rounded d-flex">
                                                            <img src="<?php echo $custome_recaptcha->inline(); ?>" class="rounded w-100" />
                                                            <div class="p-3 pr-0 capcha-spin reloadCaptcha">
                                                                <i class="tio-cached"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @else
                                                    <div class="row p-2" id="reload-captcha">
                                                        <div class="col-6 pr-0">
                                                            <input type="text" class="form-control form-control-lg border-0" name="custome_recaptcha"
                                                                   id="custome_recaptcha" required placeholder="{{translate('Enter recaptcha value')}}" autocomplete="off" value="{{env('APP_MODE')=='dev'? session('six_captcha'):''}}">
                                                        </div>
                                                        <div class="col-6 bg-white rounded d-flex">
                                                            <img src="<?php echo $custome_recaptcha->inline(); ?>" class="rounded w-100" />
                                                            <div class="p-3 pr-0 capcha-spin reloadCaptcha">
                                                                <i class="tio-cached"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn-sm px-5 btn-base" id="signInBtn">
                                                    <span>{{ translate('messages.Submit') }}</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <svg class="w-100" viewBox="0 0 508 410" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3_5982)">
                                            <path d="M529 360.302H-22V360.577H529V360.302Z" fill="#EBEBEB" />
                                            <path d="M473.79 378.009H437.292V378.284H473.79V378.009Z" fill="#EBEBEB" />
                                            <path d="M343.005 381.002H333.428V381.277H343.005V381.002Z" fill="#EBEBEB" />
                                            <path d="M436.189 367.796H415.042V368.071H436.189V367.796Z" fill="#EBEBEB" />
                                            <path d="M83.4064 369.645H35.811V369.92H83.4064V369.645Z" fill="#EBEBEB" />
                                            <path d="M100.201 369.645H93.2251V369.92H100.201V369.645Z" fill="#EBEBEB" />
                                            <path d="M226.115 374.289H122.88V374.564H226.115V374.289Z" fill="#EBEBEB" />
                                            <path
                                                d="M239.174 311.22H26.3888C22.9175 311.22 20.1074 308.402 20.1074 304.936V6.2288C20.1405 2.78425 22.9396 0.0110049 26.3888 0H239.174C242.645 0 245.466 2.81726 245.466 6.28382V304.936C245.466 308.402 242.645 311.22 239.174 311.22ZM26.3888 0.220099C23.0718 0.220099 20.3829 2.91631 20.3829 6.2288V304.936C20.3829 308.248 23.0718 310.934 26.3888 310.945H239.174C242.491 310.945 245.18 308.248 245.191 304.936V6.2288C245.191 2.91631 242.491 0.231104 239.174 0.220099H26.3888Z"
                                                fill="#EBEBEB" />
                                            <path
                                                d="M477.548 311.22H264.751C261.28 311.22 258.47 308.402 258.459 304.936V6.2288C258.492 2.78425 261.302 0.0110049 264.751 0H477.548C480.997 0.0110049 483.785 2.78425 483.818 6.2288V304.936C483.818 308.402 481.019 311.209 477.548 311.22ZM264.751 0.220099C261.434 0.220099 258.746 2.91631 258.734 6.2288V304.936C258.734 308.248 261.434 310.934 264.751 310.945H477.548C480.865 310.945 483.553 308.248 483.565 304.936V6.2288C483.565 2.91631 480.865 0.231104 477.548 0.220099H264.751Z"
                                                fill="#EBEBEB" />
                                            <path d="M468.853 68.4287H201.86V325.438H468.853V68.4287Z" fill="#E0E0E0" />
                                            <path d="M468.853 73.0947H206.147V320.948H468.853V73.0947Z" fill="#F5F5F5" />
                                            <path
                                                d="M208.086 260.927V186.369H215.834V176.519L233.289 168.376V158.295H236.199V186.369H239.108V260.927H242.987V222.19H251.715V201.864H254.624V260.927H261.401V238.653H266.25V232.842H276.917V212.516H282.736V198.958H289.524V178.621H292.434V198.958H299.222V212.516H305.029V232.842H315.697V238.653H320.546V260.927H326.364V232.842H337.032V170.885H339.941V164.106H363.204V170.885H368.053V215.422H387.448V220.253H394.225V223.158H387.448V240.59H407.802V182.495H411.681V170.885H421.379V126.348H424.288V170.885H431.076V182.495H468.853V320.948H206.147V260.927H208.086Z"
                                                fill="#E6E6E6" />
                                            <path d="M448.664 185.532H445.92V188.272H448.664V185.532Z" fill="#F0F0F0" />
                                            <path d="M448.664 190.132H445.92V192.873H448.664V190.132Z" fill="#F0F0F0" />
                                            <path d="M448.664 208.533H445.92V211.273H448.664V208.533Z" fill="#F0F0F0" />
                                            <path d="M448.664 213.122H445.92V215.862H448.664V213.122Z" fill="#F0F0F0" />
                                            <path d="M448.664 217.722H445.92V220.462H448.664V217.722Z" fill="#F0F0F0" />
                                            <path d="M448.664 231.522H445.92V234.262H448.664V231.522Z" fill="#F0F0F0" />
                                            <path d="M448.664 236.122H445.92V238.862H448.664V236.122Z" fill="#F0F0F0" />
                                            <path d="M444.3 203.933H441.556V206.673H444.3V203.933Z" fill="#F0F0F0" />
                                            <path d="M444.3 208.533H441.556V211.273H444.3V208.533Z" fill="#F0F0F0" />
                                            <path d="M444.3 213.122H441.556V215.862H444.3V213.122Z" fill="#F0F0F0" />
                                            <path d="M444.3 217.722H441.556V220.462H444.3V217.722Z" fill="#F0F0F0" />
                                            <path d="M444.3 222.322H441.556V225.062H444.3V222.322Z" fill="#F0F0F0" />
                                            <path d="M444.3 231.522H441.556V234.262H444.3V231.522Z" fill="#F0F0F0" />
                                            <path d="M444.3 236.122H441.556V238.862H444.3V236.122Z" fill="#F0F0F0" />
                                            <path d="M439.936 185.532H437.192V188.272H439.936V185.532Z" fill="#F0F0F0" />
                                            <path d="M439.936 190.132H437.192V192.873H439.936V190.132Z" fill="#F0F0F0" />
                                            <path d="M439.936 194.732H437.192V197.473H439.936V194.732Z" fill="#F0F0F0" />
                                            <path d="M439.936 199.333H437.192V202.073H439.936V199.333Z" fill="#F0F0F0" />
                                            <path d="M439.936 203.933H437.192V206.673H439.936V203.933Z" fill="#F0F0F0" />
                                            <path d="M439.936 208.533H437.192V211.273H439.936V208.533Z" fill="#F0F0F0" />
                                            <path d="M439.936 213.122H437.192V215.862H439.936V213.122Z" fill="#F0F0F0" />
                                            <path d="M439.936 217.722H437.192V220.462H439.936V217.722Z" fill="#F0F0F0" />
                                            <path d="M439.936 222.322H437.192V225.062H439.936V222.322Z" fill="#F0F0F0" />
                                            <path d="M439.936 226.922H437.192V229.662H439.936V226.922Z" fill="#F0F0F0" />
                                            <path d="M439.936 236.122H437.192V238.862H439.936V236.122Z" fill="#F0F0F0" />
                                            <path d="M435.573 185.532H432.829V188.272H435.573V185.532Z" fill="#F0F0F0" />
                                            <path d="M435.573 190.132H432.829V192.873H435.573V190.132Z" fill="#F0F0F0" />
                                            <path d="M435.573 194.732H432.829V197.473H435.573V194.732Z" fill="#F0F0F0" />
                                            <path d="M435.573 199.333H432.829V202.073H435.573V199.333Z" fill="#F0F0F0" />
                                            <path d="M435.573 203.933H432.829V206.673H435.573V203.933Z" fill="#F0F0F0" />
                                            <path d="M435.573 208.533H432.829V211.273H435.573V208.533Z" fill="#F0F0F0" />
                                            <path d="M435.573 213.122H432.829V215.862H435.573V213.122Z" fill="#F0F0F0" />
                                            <path d="M435.573 254.522H432.829V257.263H435.573V254.522Z" fill="#F0F0F0" />
                                            <path d="M431.208 185.532H428.464V188.272H431.208V185.532Z" fill="#F0F0F0" />
                                            <path d="M431.208 190.132H428.464V192.873H431.208V190.132Z" fill="#F0F0F0" />
                                            <path d="M431.208 194.732H428.464V197.473H431.208V194.732Z" fill="#F0F0F0" />
                                            <path d="M431.208 199.333H428.464V202.073H431.208V199.333Z" fill="#F0F0F0" />
                                            <path d="M431.208 203.933H428.464V206.673H431.208V203.933Z" fill="#F0F0F0" />
                                            <path d="M431.208 208.533H428.464V211.273H431.208V208.533Z" fill="#F0F0F0" />
                                            <path d="M431.208 213.122H428.464V215.862H431.208V213.122Z" fill="#F0F0F0" />
                                            <path d="M431.208 217.722H428.464V220.462H431.208V217.722Z" fill="#F0F0F0" />
                                            <path d="M431.208 245.322H428.464V248.063H431.208V245.322Z" fill="#F0F0F0" />
                                            <path d="M431.208 249.922H428.464V252.663H431.208V249.922Z" fill="#F0F0F0" />
                                            <path d="M431.208 254.522H428.464V257.263H431.208V254.522Z" fill="#F0F0F0" />
                                            <path d="M431.208 259.111H428.464V261.852H431.208V259.111Z" fill="#F0F0F0" />
                                            <path d="M431.208 277.512H428.464V280.252H431.208V277.512Z" fill="#F0F0F0" />
                                            <path d="M426.845 185.532H424.101V188.272H426.845V185.532Z" fill="#F0F0F0" />
                                            <path d="M426.845 190.132H424.101V192.873H426.845V190.132Z" fill="#F0F0F0" />
                                            <path d="M426.845 194.732H424.101V197.473H426.845V194.732Z" fill="#F0F0F0" />
                                            <path d="M426.845 199.333H424.101V202.073H426.845V199.333Z" fill="#F0F0F0" />
                                            <path d="M426.845 203.933H424.101V206.673H426.845V203.933Z" fill="#F0F0F0" />
                                            <path d="M426.845 208.533H424.101V211.273H426.845V208.533Z" fill="#F0F0F0" />
                                            <path d="M426.845 213.122H424.101V215.862H426.845V213.122Z" fill="#F0F0F0" />
                                            <path d="M426.845 217.722H424.101V220.462H426.845V217.722Z" fill="#F0F0F0" />
                                            <path d="M426.845 222.322H424.101V225.062H426.845V222.322Z" fill="#F0F0F0" />
                                            <path d="M426.845 226.922H424.101V229.662H426.845V226.922Z" fill="#F0F0F0" />
                                            <path d="M426.845 240.722H424.101V243.462H426.845V240.722Z" fill="#F0F0F0" />
                                            <path d="M426.845 245.322H424.101V248.063H426.845V245.322Z" fill="#F0F0F0" />
                                            <path d="M426.845 249.922H424.101V252.663H426.845V249.922Z" fill="#F0F0F0" />
                                            <path d="M426.845 254.522H424.101V257.263H426.845V254.522Z" fill="#F0F0F0" />
                                            <path d="M426.845 259.111H424.101V261.852H426.845V259.111Z" fill="#F0F0F0" />
                                            <path d="M426.845 277.512H424.101V280.252H426.845V277.512Z" fill="#F0F0F0" />
                                            <path d="M422.481 185.532H419.737V188.272H422.481V185.532Z" fill="#F0F0F0" />
                                            <path d="M422.481 190.132H419.737V192.873H422.481V190.132Z" fill="#F0F0F0" />
                                            <path d="M422.481 194.732H419.737V197.473H422.481V194.732Z" fill="#F0F0F0" />
                                            <path d="M422.481 199.333H419.737V202.073H422.481V199.333Z" fill="#F0F0F0" />
                                            <path d="M422.481 203.933H419.737V206.673H422.481V203.933Z" fill="#F0F0F0" />
                                            <path d="M422.481 208.533H419.737V211.273H422.481V208.533Z" fill="#F0F0F0" />
                                            <path d="M422.481 213.122H419.737V215.862H422.481V213.122Z" fill="#F0F0F0" />
                                            <path d="M422.481 217.722H419.737V220.462H422.481V217.722Z" fill="#F0F0F0" />
                                            <path d="M422.481 222.322H419.737V225.062H422.481V222.322Z" fill="#F0F0F0" />
                                            <path d="M422.481 226.922H419.737V229.662H422.481V226.922Z" fill="#F0F0F0" />
                                            <path d="M422.481 231.522H419.737V234.262H422.481V231.522Z" fill="#F0F0F0" />
                                            <path d="M422.481 236.122H419.737V238.862H422.481V236.122Z" fill="#F0F0F0" />
                                            <path d="M422.481 240.722H419.737V243.462H422.481V240.722Z" fill="#F0F0F0" />
                                            <path d="M422.481 245.322H419.737V248.063H422.481V245.322Z" fill="#F0F0F0" />
                                            <path d="M422.481 249.922H419.737V252.663H422.481V249.922Z" fill="#F0F0F0" />
                                            <path d="M422.481 254.522H419.737V257.263H422.481V254.522Z" fill="#F0F0F0" />
                                            <path d="M422.481 259.111H419.737V261.852H422.481V259.111Z" fill="#F0F0F0" />
                                            <path d="M422.481 263.711H419.737V266.452H422.481V263.711Z" fill="#F0F0F0" />
                                            <path d="M418.117 185.532H415.373V188.272H418.117V185.532Z" fill="#F0F0F0" />
                                            <path d="M418.117 190.132H415.373V192.873H418.117V190.132Z" fill="#F0F0F0" />
                                            <path d="M418.117 194.732H415.373V197.473H418.117V194.732Z" fill="#F0F0F0" />
                                            <path d="M418.117 199.333H415.373V202.073H418.117V199.333Z" fill="#F0F0F0" />
                                            <path d="M418.117 203.933H415.373V206.673H418.117V203.933Z" fill="#F0F0F0" />
                                            <path d="M418.117 208.533H415.373V211.273H418.117V208.533Z" fill="#F0F0F0" />
                                            <path d="M418.117 213.122H415.373V215.862H418.117V213.122Z" fill="#F0F0F0" />
                                            <path d="M418.117 217.722H415.373V220.462H418.117V217.722Z" fill="#F0F0F0" />
                                            <path d="M418.117 222.322H415.373V225.062H418.117V222.322Z" fill="#F0F0F0" />
                                            <path d="M418.117 226.922H415.373V229.662H418.117V226.922Z" fill="#F0F0F0" />
                                            <path d="M418.117 240.722H415.373V243.462H418.117V240.722Z" fill="#F0F0F0" />
                                            <path d="M418.117 245.322H415.373V248.063H418.117V245.322Z" fill="#F0F0F0" />
                                            <path d="M418.117 249.922H415.373V252.663H418.117V249.922Z" fill="#F0F0F0" />
                                            <path d="M418.117 254.522H415.373V257.263H418.117V254.522Z" fill="#F0F0F0" />
                                            <path d="M413.764 185.532H411.02V188.272H413.764V185.532Z" fill="#F0F0F0" />
                                            <path d="M413.764 190.132H411.02V192.873H413.764V190.132Z" fill="#F0F0F0" />
                                            <path d="M413.764 194.732H411.02V197.473H413.764V194.732Z" fill="#F0F0F0" />
                                            <path d="M413.764 199.333H411.02V202.073H413.764V199.333Z" fill="#F0F0F0" />
                                            <path d="M413.764 203.933H411.02V206.673H413.764V203.933Z" fill="#F0F0F0" />
                                            <path d="M413.764 208.533H411.02V211.273H413.764V208.533Z" fill="#F0F0F0" />
                                            <path d="M413.764 213.122H411.02V215.862H413.764V213.122Z" fill="#F0F0F0" />
                                            <path d="M413.764 217.722H411.02V220.462H413.764V217.722Z" fill="#F0F0F0" />
                                            <path d="M413.764 222.322H411.02V225.062H413.764V222.322Z" fill="#F0F0F0" />
                                            <path d="M413.764 226.922H411.02V229.662H413.764V226.922Z" fill="#F0F0F0" />
                                            <path d="M413.764 240.722H411.02V243.462H413.764V240.722Z" fill="#F0F0F0" />
                                            <path d="M413.764 245.322H411.02V248.063H413.764V245.322Z" fill="#F0F0F0" />
                                            <path d="M413.764 249.922H411.02V252.663H413.764V249.922Z" fill="#F0F0F0" />
                                            <path d="M364.637 173.592H361.893V176.332H364.637V173.592Z" fill="#F0F0F0" />
                                            <path d="M364.637 178.192H361.893V180.932H364.637V178.192Z" fill="#F0F0F0" />
                                            <path d="M364.637 182.792H361.893V185.532H364.637V182.792Z" fill="#F0F0F0" />
                                            <path d="M364.637 187.392H361.893V190.132H364.637V187.392Z" fill="#F0F0F0" />
                                            <path d="M364.637 191.992H361.893V194.732H364.637V191.992Z" fill="#F0F0F0" />
                                            <path d="M364.637 196.592H361.893V199.333H364.637V196.592Z" fill="#F0F0F0" />
                                            <path d="M364.637 201.181H361.893V203.921H364.637V201.181Z" fill="#F0F0F0" />
                                            <path d="M364.637 205.781H361.893V208.521H364.637V205.781Z" fill="#F0F0F0" />
                                            <path d="M364.637 219.582H361.893V222.322H364.637V219.582Z" fill="#F0F0F0" />
                                            <path d="M364.637 224.182H361.893V226.922H364.637V224.182Z" fill="#F0F0F0" />
                                            <path d="M360.273 173.592H357.529V176.332H360.273V173.592Z" fill="#F0F0F0" />
                                            <path d="M360.273 178.192H357.529V180.932H360.273V178.192Z" fill="#F0F0F0" />
                                            <path d="M360.273 182.792H357.529V185.532H360.273V182.792Z" fill="#F0F0F0" />
                                            <path d="M360.273 187.392H357.529V190.132H360.273V187.392Z" fill="#F0F0F0" />
                                            <path d="M360.273 191.992H357.529V194.732H360.273V191.992Z" fill="#F0F0F0" />
                                            <path d="M360.273 196.592H357.529V199.333H360.273V196.592Z" fill="#F0F0F0" />
                                            <path d="M360.273 201.181H357.529V203.921H360.273V201.181Z" fill="#F0F0F0" />
                                            <path d="M360.273 205.781H357.529V208.521H360.273V205.781Z" fill="#F0F0F0" />
                                            <path d="M360.273 224.182H357.529V226.922H360.273V224.182Z" fill="#F0F0F0" />
                                            <path d="M355.909 173.592H353.165V176.332H355.909V173.592Z" fill="#F0F0F0" />
                                            <path d="M355.909 178.192H353.165V180.932H355.909V178.192Z" fill="#F0F0F0" />
                                            <path d="M355.909 182.792H353.165V185.532H355.909V182.792Z" fill="#F0F0F0" />
                                            <path d="M355.909 187.392H353.165V190.132H355.909V187.392Z" fill="#F0F0F0" />
                                            <path d="M355.909 191.992H353.165V194.732H355.909V191.992Z" fill="#F0F0F0" />
                                            <path d="M355.909 196.592H353.165V199.333H355.909V196.592Z" fill="#F0F0F0" />
                                            <path d="M355.909 201.181H353.165V203.921H355.909V201.181Z" fill="#F0F0F0" />
                                            <path d="M355.909 205.781H353.165V208.521H355.909V205.781Z" fill="#F0F0F0" />
                                            <path d="M351.545 173.592H348.801V176.332H351.545V173.592Z" fill="#F0F0F0" />
                                            <path d="M351.545 178.192H348.801V180.932H351.545V178.192Z" fill="#F0F0F0" />
                                            <path d="M351.545 182.792H348.801V185.532H351.545V182.792Z" fill="#F0F0F0" />
                                            <path d="M351.545 187.392H348.801V190.132H351.545V187.392Z" fill="#F0F0F0" />
                                            <path d="M351.545 191.992H348.801V194.732H351.545V191.992Z" fill="#F0F0F0" />
                                            <path d="M351.545 196.592H348.801V199.333H351.545V196.592Z" fill="#F0F0F0" />
                                            <path d="M351.545 205.781H348.801V208.521H351.545V205.781Z" fill="#F0F0F0" />
                                            <path d="M351.545 210.381H348.801V213.122H351.545V210.381Z" fill="#F0F0F0" />
                                            <path d="M351.545 224.182H348.801V226.922H351.545V224.182Z" fill="#F0F0F0" />
                                            <path d="M351.545 228.782H348.801V231.522H351.545V228.782Z" fill="#F0F0F0" />
                                            <path d="M351.545 233.382H348.801V236.122H351.545V233.382Z" fill="#F0F0F0" />
                                            <path d="M351.545 237.982H348.801V240.722H351.545V237.982Z" fill="#F0F0F0" />
                                            <path d="M351.545 242.582H348.801V245.322H351.545V242.582Z" fill="#F0F0F0" />
                                            <path d="M351.545 247.171H348.801V249.911H351.545V247.171Z" fill="#F0F0F0" />
                                            <path d="M351.545 251.771H348.801V254.511H351.545V251.771Z" fill="#F0F0F0" />
                                            <path d="M347.181 173.592H344.437V176.332H347.181V173.592Z" fill="#F0F0F0" />
                                            <path d="M347.181 178.192H344.437V180.932H347.181V178.192Z" fill="#F0F0F0" />
                                            <path d="M347.181 182.792H344.437V185.532H347.181V182.792Z" fill="#F0F0F0" />
                                            <path d="M347.181 187.392H344.437V190.132H347.181V187.392Z" fill="#F0F0F0" />
                                            <path d="M347.181 191.992H344.437V194.732H347.181V191.992Z" fill="#F0F0F0" />
                                            <path d="M347.181 196.592H344.437V199.333H347.181V196.592Z" fill="#F0F0F0" />
                                            <path d="M347.181 210.381H344.437V213.122H347.181V210.381Z" fill="#F0F0F0" />
                                            <path d="M347.181 214.981H344.437V217.722H347.181V214.981Z" fill="#F0F0F0" />
                                            <path d="M347.181 219.582H344.437V222.322H347.181V219.582Z" fill="#F0F0F0" />
                                            <path d="M347.181 224.182H344.437V226.922H347.181V224.182Z" fill="#F0F0F0" />
                                            <path d="M347.181 228.782H344.437V231.522H347.181V228.782Z" fill="#F0F0F0" />
                                            <path d="M347.181 233.382H344.437V236.122H347.181V233.382Z" fill="#F0F0F0" />
                                            <path d="M347.181 237.982H344.437V240.722H347.181V237.982Z" fill="#F0F0F0" />
                                            <path d="M347.181 242.582H344.437V245.322H347.181V242.582Z" fill="#F0F0F0" />
                                            <path d="M347.181 247.171H344.437V249.911H347.181V247.171Z" fill="#F0F0F0" />
                                            <path d="M347.181 251.771H344.437V254.511H347.181V251.771Z" fill="#F0F0F0" />
                                            <path d="M347.181 256.371H344.437V259.111H347.181V256.371Z" fill="#F0F0F0" />
                                            <path d="M347.181 265.571H344.437V268.312H347.181V265.571Z" fill="#F0F0F0" />
                                            <path d="M342.817 173.592H340.073V176.332H342.817V173.592Z" fill="#F0F0F0" />
                                            <path d="M342.817 178.192H340.073V180.932H342.817V178.192Z" fill="#F0F0F0" />
                                            <path d="M342.817 182.792H340.073V185.532H342.817V182.792Z" fill="#F0F0F0" />
                                            <path d="M342.817 187.392H340.073V190.132H342.817V187.392Z" fill="#F0F0F0" />
                                            <path d="M342.817 191.992H340.073V194.732H342.817V191.992Z" fill="#F0F0F0" />
                                            <path d="M342.817 196.592H340.073V199.333H342.817V196.592Z" fill="#F0F0F0" />
                                            <path d="M342.817 210.381H340.073V213.122H342.817V210.381Z" fill="#F0F0F0" />
                                            <path d="M342.817 214.981H340.073V217.722H342.817V214.981Z" fill="#F0F0F0" />
                                            <path d="M342.817 219.582H340.073V222.322H342.817V219.582Z" fill="#F0F0F0" />
                                            <path d="M342.817 224.182H340.073V226.922H342.817V224.182Z" fill="#F0F0F0" />
                                            <path d="M342.817 237.982H340.073V240.722H342.817V237.982Z" fill="#F0F0F0" />
                                            <path d="M342.817 242.582H340.073V245.322H342.817V242.582Z" fill="#F0F0F0" />
                                            <path d="M342.817 247.171H340.073V249.911H342.817V247.171Z" fill="#F0F0F0" />
                                            <path d="M342.817 251.771H340.073V254.511H342.817V251.771Z" fill="#F0F0F0" />
                                            <path d="M342.817 256.371H340.073V259.111H342.817V256.371Z" fill="#F0F0F0" />
                                            <path d="M342.817 265.571H340.073V268.312H342.817V265.571Z" fill="#F0F0F0" />
                                            <path d="M342.817 270.171H340.073V272.912H342.817V270.171Z" fill="#F0F0F0" />
                                            <path d="M303.233 216.357H300.489V219.097H303.233V216.357Z" fill="#F0F0F0" />
                                            <path d="M303.233 220.957H300.489V223.697H303.233V220.957Z" fill="#F0F0F0" />
                                            <path d="M303.233 225.557H300.489V228.297H303.233V225.557Z" fill="#F0F0F0" />
                                            <path d="M303.233 230.146H300.489V232.887H303.233V230.146Z" fill="#F0F0F0" />
                                            <path d="M303.233 234.747H300.489V237.487H303.233V234.747Z" fill="#F0F0F0" />
                                            <path d="M303.233 239.346H300.489V242.086H303.233V239.346Z" fill="#F0F0F0" />
                                            <path d="M303.233 243.946H300.489V246.687H303.233V243.946Z" fill="#F0F0F0" />
                                            <path d="M303.233 257.747H300.489V260.487H303.233V257.747Z" fill="#F0F0F0" />
                                            <path d="M303.233 262.347H300.489V265.087H303.233V262.347Z" fill="#F0F0F0" />
                                            <path d="M303.233 266.947H300.489V269.687H303.233V266.947Z" fill="#F0F0F0" />
                                            <path d="M298.869 216.357H296.125V219.097H298.869V216.357Z" fill="#F0F0F0" />
                                            <path d="M298.869 220.957H296.125V223.697H298.869V220.957Z" fill="#F0F0F0" />
                                            <path d="M298.869 225.557H296.125V228.297H298.869V225.557Z" fill="#F0F0F0" />
                                            <path d="M298.869 230.146H296.125V232.887H298.869V230.146Z" fill="#F0F0F0" />
                                            <path d="M298.869 234.747H296.125V237.487H298.869V234.747Z" fill="#F0F0F0" />
                                            <path d="M298.869 239.346H296.125V242.086H298.869V239.346Z" fill="#F0F0F0" />
                                            <path d="M298.869 243.946H296.125V246.687H298.869V243.946Z" fill="#F0F0F0" />
                                            <path d="M294.505 216.357H291.761V219.097H294.505V216.357Z" fill="#F0F0F0" />
                                            <path d="M294.505 220.957H291.761V223.697H294.505V220.957Z" fill="#F0F0F0" />
                                            <path d="M294.505 225.557H291.761V228.297H294.505V225.557Z" fill="#F0F0F0" />
                                            <path d="M294.505 230.146H291.761V232.887H294.505V230.146Z" fill="#F0F0F0" />
                                            <path d="M294.505 234.747H291.761V237.487H294.505V234.747Z" fill="#F0F0F0" />
                                            <path d="M294.505 239.346H291.761V242.086H294.505V239.346Z" fill="#F0F0F0" />
                                            <path d="M294.505 243.946H291.761V246.687H294.505V243.946Z" fill="#F0F0F0" />
                                            <path d="M290.141 216.357H287.397V219.097H290.141V216.357Z" fill="#F0F0F0" />
                                            <path d="M290.141 220.957H287.397V223.697H290.141V220.957Z" fill="#F0F0F0" />
                                            <path d="M290.141 225.557H287.397V228.297H290.141V225.557Z" fill="#F0F0F0" />
                                            <path d="M290.141 230.146H287.397V232.887H290.141V230.146Z" fill="#F0F0F0" />
                                            <path d="M290.141 234.747H287.397V237.487H290.141V234.747Z" fill="#F0F0F0" />
                                            <path d="M290.141 239.346H287.397V242.086H290.141V239.346Z" fill="#F0F0F0" />
                                            <path d="M290.141 243.946H287.397V246.687H290.141V243.946Z" fill="#F0F0F0" />
                                            <path d="M290.141 248.546H287.397V251.287H290.141V248.546Z" fill="#F0F0F0" />
                                            <path d="M290.141 253.146H287.397V255.887H290.141V253.146Z" fill="#F0F0F0" />
                                            <path d="M290.141 257.747H287.397V260.487H290.141V257.747Z" fill="#F0F0F0" />
                                            <path d="M290.141 262.347H287.397V265.087H290.141V262.347Z" fill="#F0F0F0" />
                                            <path d="M285.778 216.357H283.034V219.097H285.778V216.357Z" fill="#F0F0F0" />
                                            <path d="M285.778 220.957H283.034V223.697H285.778V220.957Z" fill="#F0F0F0" />
                                            <path d="M285.778 225.557H283.034V228.297H285.778V225.557Z" fill="#F0F0F0" />
                                            <path d="M285.778 230.146H283.034V232.887H285.778V230.146Z" fill="#F0F0F0" />
                                            <path d="M285.778 234.747H283.034V237.487H285.778V234.747Z" fill="#F0F0F0" />
                                            <path d="M285.778 239.346H283.034V242.086H285.778V239.346Z" fill="#F0F0F0" />
                                            <path d="M285.778 243.946H283.034V246.687H285.778V243.946Z" fill="#F0F0F0" />
                                            <path d="M285.778 248.546H283.034V251.287H285.778V248.546Z" fill="#F0F0F0" />
                                            <path d="M285.778 253.146H283.034V255.887H285.778V253.146Z" fill="#F0F0F0" />
                                            <path d="M285.778 257.747H283.034V260.487H285.778V257.747Z" fill="#F0F0F0" />
                                            <path d="M285.778 262.347H283.034V265.087H285.778V262.347Z" fill="#F0F0F0" />
                                            <path d="M285.778 266.947H283.034V269.687H285.778V266.947Z" fill="#F0F0F0" />
                                            <path d="M285.778 280.736H283.034V283.476H285.778V280.736Z" fill="#F0F0F0" />
                                            <path d="M285.778 285.336H283.034V288.076H285.778V285.336Z" fill="#F0F0F0" />
                                            <path d="M281.414 216.357H278.67V219.097H281.414V216.357Z" fill="#F0F0F0" />
                                            <path d="M281.414 220.957H278.67V223.697H281.414V220.957Z" fill="#F0F0F0" />
                                            <path d="M281.414 225.557H278.67V228.297H281.414V225.557Z" fill="#F0F0F0" />
                                            <path d="M281.414 239.346H278.67V242.086H281.414V239.346Z" fill="#F0F0F0" />
                                            <path d="M281.414 243.946H278.67V246.687H281.414V243.946Z" fill="#F0F0F0" />
                                            <path d="M281.414 248.546H278.67V251.287H281.414V248.546Z" fill="#F0F0F0" />
                                            <path d="M281.414 253.146H278.67V255.887H281.414V253.146Z" fill="#F0F0F0" />
                                            <path d="M281.414 257.747H278.67V260.487H281.414V257.747Z" fill="#F0F0F0" />
                                            <path d="M281.414 262.347H278.67V265.087H281.414V262.347Z" fill="#F0F0F0" />
                                            <path d="M281.414 266.947H278.67V269.687H281.414V266.947Z" fill="#F0F0F0" />
                                            <path d="M281.414 280.736H278.67V283.476H281.414V280.736Z" fill="#F0F0F0" />
                                            <path d="M281.414 285.336H278.67V288.076H281.414V285.336Z" fill="#F0F0F0" />
                                            <path d="M281.414 289.936H278.67V292.676H281.414V289.936Z" fill="#F0F0F0" />
                                            <path d="M235.692 188.757H232.948V191.497H235.692V188.757Z" fill="#F0F0F0" />
                                            <path d="M235.692 193.357H232.948V196.097H235.692V193.357Z" fill="#F0F0F0" />
                                            <path d="M235.692 197.957H232.948V200.697H235.692V197.957Z" fill="#F0F0F0" />
                                            <path d="M235.692 202.557H232.948V205.297H235.692V202.557Z" fill="#F0F0F0" />
                                            <path d="M235.692 207.157H232.948V209.897H235.692V207.157Z" fill="#F0F0F0" />
                                            <path d="M235.692 211.757H232.948V214.497H235.692V211.757Z" fill="#F0F0F0" />
                                            <path d="M235.692 216.357H232.948V219.097H235.692V216.357Z" fill="#F0F0F0" />
                                            <path d="M235.692 220.957H232.948V223.697H235.692V220.957Z" fill="#F0F0F0" />
                                            <path d="M235.692 225.557H232.948V228.297H235.692V225.557Z" fill="#F0F0F0" />
                                            <path d="M235.692 230.146H232.948V232.887H235.692V230.146Z" fill="#F0F0F0" />
                                            <path d="M235.692 234.747H232.948V237.487H235.692V234.747Z" fill="#F0F0F0" />
                                            <path d="M235.692 239.346H232.948V242.086H235.692V239.346Z" fill="#F0F0F0" />
                                            <path d="M235.692 243.946H232.948V246.687H235.692V243.946Z" fill="#F0F0F0" />
                                            <path d="M235.692 248.546H232.948V251.287H235.692V248.546Z" fill="#F0F0F0" />
                                            <path d="M235.692 253.146H232.948V255.887H235.692V253.146Z" fill="#F0F0F0" />
                                            <path d="M235.692 257.747H232.948V260.487H235.692V257.747Z" fill="#F0F0F0" />
                                            <path d="M235.692 262.347H232.948V265.087H235.692V262.347Z" fill="#F0F0F0" />
                                            <path d="M235.692 266.947H232.948V269.687H235.692V266.947Z" fill="#F0F0F0" />
                                            <path d="M235.692 271.547H232.948V274.287H235.692V271.547Z" fill="#F0F0F0" />
                                            <path d="M235.692 276.136H232.948V278.876H235.692V276.136Z" fill="#F0F0F0" />
                                            <path d="M235.692 280.736H232.948V283.476H235.692V280.736Z" fill="#F0F0F0" />
                                            <path d="M235.692 285.336H232.948V288.076H235.692V285.336Z" fill="#F0F0F0" />
                                            <path d="M235.692 289.936H232.948V292.676H235.692V289.936Z" fill="#F0F0F0" />
                                            <path d="M231.328 188.757H228.584V191.497H231.328V188.757Z" fill="#F0F0F0" />
                                            <path d="M231.328 193.357H228.584V196.097H231.328V193.357Z" fill="#F0F0F0" />
                                            <path d="M231.328 197.957H228.584V200.697H231.328V197.957Z" fill="#F0F0F0" />
                                            <path d="M231.328 202.557H228.584V205.297H231.328V202.557Z" fill="#F0F0F0" />
                                            <path d="M231.328 207.157H228.584V209.897H231.328V207.157Z" fill="#F0F0F0" />
                                            <path d="M231.328 211.757H228.584V214.497H231.328V211.757Z" fill="#F0F0F0" />
                                            <path d="M231.328 216.357H228.584V219.097H231.328V216.357Z" fill="#F0F0F0" />
                                            <path d="M231.328 220.957H228.584V223.697H231.328V220.957Z" fill="#F0F0F0" />
                                            <path d="M231.328 225.557H228.584V228.297H231.328V225.557Z" fill="#F0F0F0" />
                                            <path d="M231.328 230.146H228.584V232.887H231.328V230.146Z" fill="#F0F0F0" />
                                            <path d="M231.328 234.747H228.584V237.487H231.328V234.747Z" fill="#F0F0F0" />
                                            <path d="M231.328 239.346H228.584V242.086H231.328V239.346Z" fill="#F0F0F0" />
                                            <path d="M231.328 243.946H228.584V246.687H231.328V243.946Z" fill="#F0F0F0" />
                                            <path d="M231.328 248.546H228.584V251.287H231.328V248.546Z" fill="#F0F0F0" />
                                            <path d="M231.328 253.146H228.584V255.887H231.328V253.146Z" fill="#F0F0F0" />
                                            <path d="M231.328 257.747H228.584V260.487H231.328V257.747Z" fill="#F0F0F0" />
                                            <path d="M231.328 262.347H228.584V265.087H231.328V262.347Z" fill="#F0F0F0" />
                                            <path d="M231.328 266.947H228.584V269.687H231.328V266.947Z" fill="#F0F0F0" />
                                            <path d="M231.328 271.547H228.584V274.287H231.328V271.547Z" fill="#F0F0F0" />
                                            <path d="M226.964 188.757H224.22V191.497H226.964V188.757Z" fill="#F0F0F0" />
                                            <path d="M226.964 193.357H224.22V196.097H226.964V193.357Z" fill="#F0F0F0" />
                                            <path d="M226.964 197.957H224.22V200.697H226.964V197.957Z" fill="#F0F0F0" />
                                            <path d="M226.964 202.557H224.22V205.297H226.964V202.557Z" fill="#F0F0F0" />
                                            <path d="M226.964 207.157H224.22V209.897H226.964V207.157Z" fill="#F0F0F0" />
                                            <path d="M226.964 211.757H224.22V214.497H226.964V211.757Z" fill="#F0F0F0" />
                                            <path d="M226.964 216.357H224.22V219.097H226.964V216.357Z" fill="#F0F0F0" />
                                            <path d="M226.964 220.957H224.22V223.697H226.964V220.957Z" fill="#F0F0F0" />
                                            <path d="M226.964 225.557H224.22V228.297H226.964V225.557Z" fill="#F0F0F0" />
                                            <path d="M226.964 230.146H224.22V232.887H226.964V230.146Z" fill="#F0F0F0" />
                                            <path d="M226.964 234.747H224.22V237.487H226.964V234.747Z" fill="#F0F0F0" />
                                            <path d="M226.964 239.346H224.22V242.086H226.964V239.346Z" fill="#F0F0F0" />
                                            <path d="M226.964 243.946H224.22V246.687H226.964V243.946Z" fill="#F0F0F0" />
                                            <path d="M226.964 248.546H224.22V251.287H226.964V248.546Z" fill="#F0F0F0" />
                                            <path d="M226.964 253.146H224.22V255.887H226.964V253.146Z" fill="#F0F0F0" />
                                            <path d="M226.964 257.747H224.22V260.487H226.964V257.747Z" fill="#F0F0F0" />
                                            <path d="M226.964 262.347H224.22V265.087H226.964V262.347Z" fill="#F0F0F0" />
                                            <path d="M226.964 266.947H224.22V269.687H226.964V266.947Z" fill="#F0F0F0" />
                                            <path d="M226.964 271.547H224.22V274.287H226.964V271.547Z" fill="#F0F0F0" />
                                            <path d="M222.6 188.757H219.856V191.497H222.6V188.757Z" fill="#F0F0F0" />
                                            <path d="M222.6 193.357H219.856V196.097H222.6V193.357Z" fill="#F0F0F0" />
                                            <path d="M222.6 197.957H219.856V200.697H222.6V197.957Z" fill="#F0F0F0" />
                                            <path d="M222.6 202.557H219.856V205.297H222.6V202.557Z" fill="#F0F0F0" />
                                            <path d="M222.6 207.157H219.856V209.897H222.6V207.157Z" fill="#F0F0F0" />
                                            <path d="M222.6 211.757H219.856V214.497H222.6V211.757Z" fill="#F0F0F0" />
                                            <path d="M222.6 216.357H219.856V219.097H222.6V216.357Z" fill="#F0F0F0" />
                                            <path d="M222.6 220.957H219.856V223.697H222.6V220.957Z" fill="#F0F0F0" />
                                            <path d="M222.6 225.557H219.856V228.297H222.6V225.557Z" fill="#F0F0F0" />
                                            <path d="M222.6 230.146H219.856V232.887H222.6V230.146Z" fill="#F0F0F0" />
                                            <path d="M222.6 234.747H219.856V237.487H222.6V234.747Z" fill="#F0F0F0" />
                                            <path d="M222.6 239.346H219.856V242.086H222.6V239.346Z" fill="#F0F0F0" />
                                            <path d="M222.6 243.946H219.856V246.687H222.6V243.946Z" fill="#F0F0F0" />
                                            <path d="M222.6 248.546H219.856V251.287H222.6V248.546Z" fill="#F0F0F0" />
                                            <path d="M222.6 253.146H219.856V255.887H222.6V253.146Z" fill="#F0F0F0" />
                                            <path d="M218.236 188.757H215.492V191.497H218.236V188.757Z" fill="#F0F0F0" />
                                            <path d="M218.236 193.357H215.492V196.097H218.236V193.357Z" fill="#F0F0F0" />
                                            <path d="M218.236 197.957H215.492V200.697H218.236V197.957Z" fill="#F0F0F0" />
                                            <path d="M218.236 202.557H215.492V205.297H218.236V202.557Z" fill="#F0F0F0" />
                                            <path d="M218.236 207.157H215.492V209.897H218.236V207.157Z" fill="#F0F0F0" />
                                            <path d="M218.236 211.757H215.492V214.497H218.236V211.757Z" fill="#F0F0F0" />
                                            <path d="M218.236 216.357H215.492V219.097H218.236V216.357Z" fill="#F0F0F0" />
                                            <path d="M218.236 220.957H215.492V223.697H218.236V220.957Z" fill="#F0F0F0" />
                                            <path d="M218.236 225.557H215.492V228.297H218.236V225.557Z" fill="#F0F0F0" />
                                            <path d="M218.236 230.146H215.492V232.887H218.236V230.146Z" fill="#F0F0F0" />
                                            <path d="M218.236 234.747H215.492V237.487H218.236V234.747Z" fill="#F0F0F0" />
                                            <path d="M218.236 239.346H215.492V242.086H218.236V239.346Z" fill="#F0F0F0" />
                                            <path d="M218.236 243.946H215.492V246.687H218.236V243.946Z" fill="#F0F0F0" />
                                            <path d="M213.872 188.757H211.128V191.497H213.872V188.757Z" fill="#F0F0F0" />
                                            <path d="M213.872 193.357H211.128V196.097H213.872V193.357Z" fill="#F0F0F0" />
                                            <path d="M213.872 197.957H211.128V200.697H213.872V197.957Z" fill="#F0F0F0" />
                                            <path d="M213.872 202.557H211.128V205.297H213.872V202.557Z" fill="#F0F0F0" />
                                            <path d="M213.872 207.157H211.128V209.897H213.872V207.157Z" fill="#F0F0F0" />
                                            <path d="M213.872 211.757H211.128V214.497H213.872V211.757Z" fill="#F0F0F0" />
                                            <path d="M213.872 216.357H211.128V219.097H213.872V216.357Z" fill="#F0F0F0" />
                                            <path d="M213.872 220.957H211.128V223.697H213.872V220.957Z" fill="#F0F0F0" />
                                            <path d="M213.872 225.557H211.128V228.297H213.872V225.557Z" fill="#F0F0F0" />
                                            <path d="M213.872 230.146H211.128V232.887H213.872V230.146Z" fill="#F0F0F0" />
                                            <path d="M213.872 234.747H211.128V237.487H213.872V234.747Z" fill="#F0F0F0" />
                                            <path d="M213.872 239.346H211.128V242.086H213.872V239.346Z" fill="#F0F0F0" />
                                            <path d="M468.533 187.392H465.789V190.132H468.533V187.392Z" fill="#F0F0F0" />
                                            <path d="M468.533 191.992H465.789V194.732H468.533V191.992Z" fill="#F0F0F0" />
                                            <path d="M468.533 196.592H465.789V199.333H468.533V196.592Z" fill="#F0F0F0" />
                                            <path d="M468.533 201.181H465.789V203.921H468.533V201.181Z" fill="#F0F0F0" />
                                            <path d="M468.533 205.781H465.789V208.521H468.533V205.781Z" fill="#F0F0F0" />
                                            <path d="M468.533 210.381H465.789V213.122H468.533V210.381Z" fill="#F0F0F0" />
                                            <path d="M468.533 214.981H465.789V217.722H468.533V214.981Z" fill="#F0F0F0" />
                                            <path d="M468.533 219.582H465.789V222.322H468.533V219.582Z" fill="#F0F0F0" />
                                            <path d="M468.533 224.182H465.789V226.922H468.533V224.182Z" fill="#F0F0F0" />
                                            <path d="M468.533 228.782H465.789V231.522H468.533V228.782Z" fill="#F0F0F0" />
                                            <path d="M468.533 233.382H465.789V236.122H468.533V233.382Z" fill="#F0F0F0" />
                                            <path d="M468.533 237.982H465.789V240.722H468.533V237.982Z" fill="#F0F0F0" />
                                            <path d="M468.533 242.582H465.789V245.322H468.533V242.582Z" fill="#F0F0F0" />
                                            <path d="M468.533 247.171H465.789V249.911H468.533V247.171Z" fill="#F0F0F0" />
                                            <path d="M468.533 251.771H465.789V254.511H468.533V251.771Z" fill="#F0F0F0" />
                                            <path d="M468.533 256.371H465.789V259.111H468.533V256.371Z" fill="#F0F0F0" />
                                            <path d="M468.533 260.971H465.789V263.711H468.533V260.971Z" fill="#F0F0F0" />
                                            <path d="M468.533 270.171H465.789V272.912H468.533V270.171Z" fill="#F0F0F0" />
                                            <path d="M468.533 274.771H465.789V277.512H468.533V274.771Z" fill="#F0F0F0" />
                                            <path d="M468.533 279.372H465.789V282.112H468.533V279.372Z" fill="#F0F0F0" />
                                            <path d="M468.533 283.972H465.789V286.712H468.533V283.972Z" fill="#F0F0F0" />
                                            <path d="M468.533 288.561H465.789V291.301H468.533V288.561Z" fill="#F0F0F0" />
                                            <path d="M464.169 187.392H461.425V190.132H464.169V187.392Z" fill="#F0F0F0" />
                                            <path d="M464.169 191.992H461.425V194.732H464.169V191.992Z" fill="#F0F0F0" />
                                            <path d="M464.169 196.592H461.425V199.333H464.169V196.592Z" fill="#F0F0F0" />
                                            <path d="M464.169 201.181H461.425V203.921H464.169V201.181Z" fill="#F0F0F0" />
                                            <path d="M464.169 205.781H461.425V208.521H464.169V205.781Z" fill="#F0F0F0" />
                                            <path d="M464.169 210.381H461.425V213.122H464.169V210.381Z" fill="#F0F0F0" />
                                            <path d="M464.169 214.981H461.425V217.722H464.169V214.981Z" fill="#F0F0F0" />
                                            <path d="M464.169 219.582H461.425V222.322H464.169V219.582Z" fill="#F0F0F0" />
                                            <path d="M464.169 224.182H461.425V226.922H464.169V224.182Z" fill="#F0F0F0" />
                                            <path d="M464.169 228.782H461.425V231.522H464.169V228.782Z" fill="#F0F0F0" />
                                            <path d="M464.169 233.382H461.425V236.122H464.169V233.382Z" fill="#F0F0F0" />
                                            <path d="M464.169 237.982H461.425V240.722H464.169V237.982Z" fill="#F0F0F0" />
                                            <path d="M464.169 242.582H461.425V245.322H464.169V242.582Z" fill="#F0F0F0" />
                                            <path d="M464.169 247.171H461.425V249.911H464.169V247.171Z" fill="#F0F0F0" />
                                            <path d="M464.169 251.771H461.425V254.511H464.169V251.771Z" fill="#F0F0F0" />
                                            <path d="M464.169 256.371H461.425V259.111H464.169V256.371Z" fill="#F0F0F0" />
                                            <path d="M464.169 283.972H461.425V286.712H464.169V283.972Z" fill="#F0F0F0" />
                                            <path d="M464.169 288.561H461.425V291.301H464.169V288.561Z" fill="#F0F0F0" />
                                            <path d="M459.816 187.392H457.072V190.132H459.816V187.392Z" fill="#F0F0F0" />
                                            <path d="M459.816 191.992H457.072V194.732H459.816V191.992Z" fill="#F0F0F0" />
                                            <path d="M459.816 196.592H457.072V199.333H459.816V196.592Z" fill="#F0F0F0" />
                                            <path d="M459.816 201.181H457.072V203.921H459.816V201.181Z" fill="#F0F0F0" />
                                            <path d="M459.816 205.781H457.072V208.521H459.816V205.781Z" fill="#F0F0F0" />
                                            <path d="M459.816 210.381H457.072V213.122H459.816V210.381Z" fill="#F0F0F0" />
                                            <path d="M459.816 214.981H457.072V217.722H459.816V214.981Z" fill="#F0F0F0" />
                                            <path d="M459.816 219.582H457.072V222.322H459.816V219.582Z" fill="#F0F0F0" />
                                            <path d="M459.816 224.182H457.072V226.922H459.816V224.182Z" fill="#F0F0F0" />
                                            <path d="M459.816 228.782H457.072V231.522H459.816V228.782Z" fill="#F0F0F0" />
                                            <path d="M459.816 233.382H457.072V236.122H459.816V233.382Z" fill="#F0F0F0" />
                                            <path d="M459.816 237.982H457.072V240.722H459.816V237.982Z" fill="#F0F0F0" />
                                            <path d="M459.816 242.582H457.072V245.322H459.816V242.582Z" fill="#F0F0F0" />
                                            <path d="M459.816 247.171H457.072V249.911H459.816V247.171Z" fill="#F0F0F0" />
                                            <path d="M459.816 251.771H457.072V254.511H459.816V251.771Z" fill="#F0F0F0" />
                                            <path d="M459.816 256.371H457.072V259.111H459.816V256.371Z" fill="#F0F0F0" />
                                            <path d="M459.816 265.571H457.072V268.312H459.816V265.571Z" fill="#F0F0F0" />
                                            <path d="M459.816 270.171H457.072V272.912H459.816V270.171Z" fill="#F0F0F0" />
                                            <path d="M459.816 274.771H457.072V277.512H459.816V274.771Z" fill="#F0F0F0" />
                                            <path d="M459.816 279.372H457.072V282.112H459.816V279.372Z" fill="#F0F0F0" />
                                            <path d="M459.816 288.561H457.072V291.301H459.816V288.561Z" fill="#F0F0F0" />
                                            <path d="M383.701 219.582H380.958V222.322H383.701V219.582Z" fill="#F0F0F0" />
                                            <path d="M383.701 224.182H380.958V226.922H383.701V224.182Z" fill="#F0F0F0" />
                                            <path d="M383.701 228.782H380.958V231.522H383.701V228.782Z" fill="#F0F0F0" />
                                            <path d="M383.701 233.382H380.958V236.122H383.701V233.382Z" fill="#F0F0F0" />
                                            <path d="M383.701 237.982H380.958V240.722H383.701V237.982Z" fill="#F0F0F0" />
                                            <path d="M383.701 242.582H380.958V245.322H383.701V242.582Z" fill="#F0F0F0" />
                                            <path d="M383.701 247.171H380.958V249.911H383.701V247.171Z" fill="#F0F0F0" />
                                            <path d="M383.701 251.771H380.958V254.511H383.701V251.771Z" fill="#F0F0F0" />
                                            <path d="M383.701 256.371H380.958V259.111H383.701V256.371Z" fill="#F0F0F0" />
                                            <path d="M383.701 260.971H380.958V263.711H383.701V260.971Z" fill="#F0F0F0" />
                                            <path d="M383.701 265.571H380.958V268.312H383.701V265.571Z" fill="#F0F0F0" />
                                            <path d="M383.701 270.171H380.958V272.912H383.701V270.171Z" fill="#F0F0F0" />
                                            <path d="M383.701 274.771H380.958V277.512H383.701V274.771Z" fill="#F0F0F0" />
                                            <path d="M383.701 283.972H380.958V286.712H383.701V283.972Z" fill="#F0F0F0" />
                                            <path d="M383.701 288.561H380.958V291.301H383.701V288.561Z" fill="#F0F0F0" />
                                            <path d="M383.701 293.161H380.958V295.901H383.701V293.161Z" fill="#F0F0F0" />
                                            <path d="M383.701 297.761H380.958V300.501H383.701V297.761Z" fill="#F0F0F0" />
                                            <path d="M383.701 306.961H380.958V309.701H383.701V306.961Z" fill="#F0F0F0" />
                                            <path d="M383.701 311.561H380.958V314.301H383.701V311.561Z" fill="#F0F0F0" />
                                            <path d="M383.701 316.161H380.958V318.901H383.701V316.161Z" fill="#F0F0F0" />
                                            <path d="M379.337 219.582H376.593V222.322H379.337V219.582Z" fill="#F0F0F0" />
                                            <path d="M379.337 224.182H376.593V226.922H379.337V224.182Z" fill="#F0F0F0" />
                                            <path d="M379.337 228.782H376.593V231.522H379.337V228.782Z" fill="#F0F0F0" />
                                            <path d="M379.337 233.382H376.593V236.122H379.337V233.382Z" fill="#F0F0F0" />
                                            <path d="M379.337 237.982H376.593V240.722H379.337V237.982Z" fill="#F0F0F0" />
                                            <path d="M379.337 242.582H376.593V245.322H379.337V242.582Z" fill="#F0F0F0" />
                                            <path d="M379.337 247.171H376.593V249.911H379.337V247.171Z" fill="#F0F0F0" />
                                            <path d="M379.337 251.771H376.593V254.511H379.337V251.771Z" fill="#F0F0F0" />
                                            <path d="M379.337 256.371H376.593V259.111H379.337V256.371Z" fill="#F0F0F0" />
                                            <path d="M379.337 260.971H376.593V263.711H379.337V260.971Z" fill="#F0F0F0" />
                                            <path d="M379.337 265.571H376.593V268.312H379.337V265.571Z" fill="#F0F0F0" />
                                            <path d="M379.337 270.171H376.593V272.912H379.337V270.171Z" fill="#F0F0F0" />
                                            <path d="M379.337 274.771H376.593V277.512H379.337V274.771Z" fill="#F0F0F0" />
                                            <path d="M379.337 288.561H376.593V291.301H379.337V288.561Z" fill="#F0F0F0" />
                                            <path d="M379.337 293.161H376.593V295.901H379.337V293.161Z" fill="#F0F0F0" />
                                            <path d="M379.337 302.361H376.593V305.101H379.337V302.361Z" fill="#F0F0F0" />
                                            <path d="M379.337 306.961H376.593V309.701H379.337V306.961Z" fill="#F0F0F0" />
                                            <path d="M379.337 311.561H376.593V314.301H379.337V311.561Z" fill="#F0F0F0" />
                                            <path d="M379.337 316.161H376.593V318.901H379.337V316.161Z" fill="#F0F0F0" />
                                            <path d="M374.973 219.582H372.229V222.322H374.973V219.582Z" fill="#F0F0F0" />
                                            <path d="M374.973 224.182H372.229V226.922H374.973V224.182Z" fill="#F0F0F0" />
                                            <path d="M374.973 228.782H372.229V231.522H374.973V228.782Z" fill="#F0F0F0" />
                                            <path d="M374.973 233.382H372.229V236.122H374.973V233.382Z" fill="#F0F0F0" />
                                            <path d="M374.973 237.982H372.229V240.722H374.973V237.982Z" fill="#F0F0F0" />
                                            <path d="M374.973 242.582H372.229V245.322H374.973V242.582Z" fill="#F0F0F0" />
                                            <path d="M374.973 247.171H372.229V249.911H374.973V247.171Z" fill="#F0F0F0" />
                                            <path d="M374.973 251.771H372.229V254.511H374.973V251.771Z" fill="#F0F0F0" />
                                            <path d="M374.973 256.371H372.229V259.111H374.973V256.371Z" fill="#F0F0F0" />
                                            <path d="M374.973 260.971H372.229V263.711H374.973V260.971Z" fill="#F0F0F0" />
                                            <path d="M374.973 265.571H372.229V268.312H374.973V265.571Z" fill="#F0F0F0" />
                                            <path d="M374.973 270.171H372.229V272.912H374.973V270.171Z" fill="#F0F0F0" />
                                            <path d="M374.973 274.771H372.229V277.512H374.973V274.771Z" fill="#F0F0F0" />
                                            <path d="M374.973 279.372H372.229V282.112H374.973V279.372Z" fill="#F0F0F0" />
                                            <path d="M374.973 288.561H372.229V291.301H374.973V288.561Z" fill="#F0F0F0" />
                                            <path d="M374.973 297.761H372.229V300.501H374.973V297.761Z" fill="#F0F0F0" />
                                            <path d="M374.973 302.361H372.229V305.101H374.973V302.361Z" fill="#F0F0F0" />
                                            <path d="M374.973 306.961H372.229V309.701H374.973V306.961Z" fill="#F0F0F0" />
                                            <path d="M374.973 311.561H372.229V314.301H374.973V311.561Z" fill="#F0F0F0" />
                                            <path d="M374.973 316.161H372.229V318.901H374.973V316.161Z" fill="#F0F0F0" />
                                            <path d="M401.476 245.806H398.732V248.546H401.476V245.806Z" fill="#F0F0F0" />
                                            <path d="M401.476 250.406H398.732V253.146H401.476V250.406Z" fill="#F0F0F0" />
                                            <path d="M401.476 255.006H398.732V257.747H401.476V255.006Z" fill="#F0F0F0" />
                                            <path d="M401.476 259.596H398.732V262.336H401.476V259.596Z" fill="#F0F0F0" />
                                            <path d="M401.476 264.195H398.732V266.936H401.476V264.195Z" fill="#F0F0F0" />
                                            <path d="M401.476 268.795H398.732V271.536H401.476V268.795Z" fill="#F0F0F0" />
                                            <path d="M401.476 282.596H398.732V285.336H401.476V282.596Z" fill="#F0F0F0" />
                                            <path d="M401.476 287.196H398.732V289.936H401.476V287.196Z" fill="#F0F0F0" />
                                            <path d="M401.476 291.796H398.732V294.536H401.476V291.796Z" fill="#F0F0F0" />
                                            <path d="M401.476 296.396H398.732V299.136H401.476V296.396Z" fill="#F0F0F0" />
                                            <path d="M401.476 300.996H398.732V303.736H401.476V300.996Z" fill="#F0F0F0" />
                                            <path d="M401.476 305.585H398.732V308.325H401.476V305.585Z" fill="#F0F0F0" />
                                            <path d="M401.476 310.185H398.732V312.925H401.476V310.185Z" fill="#F0F0F0" />
                                            <path d="M397.113 245.806H394.369V248.546H397.113V245.806Z" fill="#F0F0F0" />
                                            <path d="M397.113 250.406H394.369V253.146H397.113V250.406Z" fill="#F0F0F0" />
                                            <path d="M397.113 255.006H394.369V257.747H397.113V255.006Z" fill="#F0F0F0" />
                                            <path d="M397.113 259.596H394.369V262.336H397.113V259.596Z" fill="#F0F0F0" />
                                            <path d="M397.113 264.195H394.369V266.936H397.113V264.195Z" fill="#F0F0F0" />
                                            <path d="M397.113 268.795H394.369V271.536H397.113V268.795Z" fill="#F0F0F0" />
                                            <path d="M397.113 282.596H394.369V285.336H397.113V282.596Z" fill="#F0F0F0" />
                                            <path d="M397.113 287.196H394.369V289.936H397.113V287.196Z" fill="#F0F0F0" />
                                            <path d="M397.113 291.796H394.369V294.536H397.113V291.796Z" fill="#F0F0F0" />
                                            <path d="M397.113 296.396H394.369V299.136H397.113V296.396Z" fill="#F0F0F0" />
                                            <path d="M397.113 300.996H394.369V303.736H397.113V300.996Z" fill="#F0F0F0" />
                                            <path d="M397.113 305.585H394.369V308.325H397.113V305.585Z" fill="#F0F0F0" />
                                            <path d="M397.113 314.785H394.369V317.525H397.113V314.785Z" fill="#F0F0F0" />
                                            <path d="M252.167 225.557H249.423V228.297H252.167V225.557Z" fill="#F0F0F0" />
                                            <path d="M252.167 230.146H249.423V232.887H252.167V230.146Z" fill="#F0F0F0" />
                                            <path d="M252.167 234.747H249.423V237.487H252.167V234.747Z" fill="#F0F0F0" />
                                            <path d="M252.167 239.346H249.423V242.086H252.167V239.346Z" fill="#F0F0F0" />
                                            <path d="M252.167 243.946H249.423V246.687H252.167V243.946Z" fill="#F0F0F0" />
                                            <path d="M252.167 248.546H249.423V251.287H252.167V248.546Z" fill="#F0F0F0" />
                                            <path d="M252.167 253.146H249.423V255.887H252.167V253.146Z" fill="#F0F0F0" />
                                            <path d="M252.167 257.747H249.423V260.487H252.167V257.747Z" fill="#F0F0F0" />
                                            <path d="M252.167 262.347H249.423V265.087H252.167V262.347Z" fill="#F0F0F0" />
                                            <path d="M252.167 266.947H249.423V269.687H252.167V266.947Z" fill="#F0F0F0" />
                                            <path d="M252.167 271.547H249.423V274.287H252.167V271.547Z" fill="#F0F0F0" />
                                            <path d="M252.167 280.736H249.423V283.476H252.167V280.736Z" fill="#F0F0F0" />
                                            <path d="M252.167 285.336H249.423V288.076H252.167V285.336Z" fill="#F0F0F0" />
                                            <path d="M252.167 289.936H249.423V292.676H252.167V289.936Z" fill="#F0F0F0" />
                                            <path d="M252.167 294.536H249.423V297.276H252.167V294.536Z" fill="#F0F0F0" />
                                            <path d="M252.167 299.136H249.423V301.876H252.167V299.136Z" fill="#F0F0F0" />
                                            <path d="M252.167 303.736H249.423V306.477H252.167V303.736Z" fill="#F0F0F0" />
                                            <path d="M252.167 308.336H249.423V311.077H252.167V308.336Z" fill="#F0F0F0" />
                                            <path d="M252.167 312.937H249.423V315.677H252.167V312.937Z" fill="#F0F0F0" />
                                            <path d="M247.814 225.557H245.07V228.297H247.814V225.557Z" fill="#F0F0F0" />
                                            <path d="M247.814 230.146H245.07V232.887H247.814V230.146Z" fill="#F0F0F0" />
                                            <path d="M247.814 234.747H245.07V237.487H247.814V234.747Z" fill="#F0F0F0" />
                                            <path d="M247.814 239.346H245.07V242.086H247.814V239.346Z" fill="#F0F0F0" />
                                            <path d="M247.814 243.946H245.07V246.687H247.814V243.946Z" fill="#F0F0F0" />
                                            <path d="M247.814 248.546H245.07V251.287H247.814V248.546Z" fill="#F0F0F0" />
                                            <path d="M247.814 253.146H245.07V255.887H247.814V253.146Z" fill="#F0F0F0" />
                                            <path d="M247.814 257.747H245.07V260.487H247.814V257.747Z" fill="#F0F0F0" />
                                            <path d="M247.814 262.347H245.07V265.087H247.814V262.347Z" fill="#F0F0F0" />
                                            <path d="M247.814 266.947H245.07V269.687H247.814V266.947Z" fill="#F0F0F0" />
                                            <path d="M247.814 271.547H245.07V274.287H247.814V271.547Z" fill="#F0F0F0" />
                                            <path d="M247.814 276.136H245.07V278.876H247.814V276.136Z" fill="#F0F0F0" />
                                            <path d="M247.814 280.736H245.07V283.476H247.814V280.736Z" fill="#F0F0F0" />
                                            <path d="M247.814 285.336H245.07V288.076H247.814V285.336Z" fill="#F0F0F0" />
                                            <path d="M247.814 289.936H245.07V292.676H247.814V289.936Z" fill="#F0F0F0" />
                                            <path d="M247.814 294.536H245.07V297.276H247.814V294.536Z" fill="#F0F0F0" />
                                            <path d="M247.814 299.136H245.07V301.876H247.814V299.136Z" fill="#F0F0F0" />
                                            <path d="M247.814 303.736H245.07V306.477H247.814V303.736Z" fill="#F0F0F0" />
                                            <path d="M247.814 308.336H245.07V311.077H247.814V308.336Z" fill="#F0F0F0" />
                                            <path d="M247.814 312.937H245.07V315.677H247.814V312.937Z" fill="#F0F0F0" />
                                            <path d="M273.667 243.462H270.923V246.203H273.667V243.462Z" fill="#F0F0F0" />
                                            <path d="M273.667 248.062H270.923V250.803H273.667V248.062Z" fill="#F0F0F0" />
                                            <path d="M273.667 252.663H270.923V255.403H273.667V252.663Z" fill="#F0F0F0" />
                                            <path d="M273.667 257.263H270.923V260.003H273.667V257.263Z" fill="#F0F0F0" />
                                            <path d="M273.667 261.862H270.923V264.603H273.667V261.862Z" fill="#F0F0F0" />
                                            <path d="M273.667 266.462H270.923V269.203H273.667V266.462Z" fill="#F0F0F0" />
                                            <path d="M273.667 271.062H270.923V273.803H273.667V271.062Z" fill="#F0F0F0" />
                                            <path d="M273.667 275.652H270.923V278.392H273.667V275.652Z" fill="#F0F0F0" />
                                            <path d="M273.667 280.252H270.923V282.992H273.667V280.252Z" fill="#F0F0F0" />
                                            <path d="M273.667 284.852H270.923V287.592H273.667V284.852Z" fill="#F0F0F0" />
                                            <path d="M269.303 243.462H266.559V246.203H269.303V243.462Z" fill="#F0F0F0" />
                                            <path d="M269.303 248.062H266.559V250.803H269.303V248.062Z" fill="#F0F0F0" />
                                            <path d="M269.303 252.663H266.559V255.403H269.303V252.663Z" fill="#F0F0F0" />
                                            <path d="M269.303 257.263H266.559V260.003H269.303V257.263Z" fill="#F0F0F0" />
                                            <path d="M269.303 261.862H266.559V264.603H269.303V261.862Z" fill="#F0F0F0" />
                                            <path d="M269.303 266.462H266.559V269.203H269.303V266.462Z" fill="#F0F0F0" />
                                            <path d="M269.303 271.062H266.559V273.803H269.303V271.062Z" fill="#F0F0F0" />
                                            <path d="M269.303 275.652H266.559V278.392H269.303V275.652Z" fill="#F0F0F0" />
                                            <path d="M269.303 280.252H266.559V282.992H269.303V280.252Z" fill="#F0F0F0" />
                                            <path d="M295.255 68.9351H290.648V325.438H295.255V68.9351Z" fill="#E0E0E0" />
                                            <path d="M381.993 68.9351H377.387V325.438H381.993V68.9351Z" fill="#E0E0E0" />
                                            <path d="M468.721 68.9351H464.114V325.438H468.721V68.9351Z" fill="#E0E0E0" />
                                            <path
                                                d="M140.898 300.435H169.307C171.996 300.435 174.167 302.603 174.167 305.288V360.125H136.049V305.332C136.027 302.647 138.176 300.457 140.864 300.435H140.898Z"
                                                fill="#F0F0F0" />
                                            <path d="M174.167 308.557H136.049V312.838H174.167V308.557Z" fill="#E6E6E6" />
                                            <path
                                                d="M157.725 352.939H167.225C168.668 352.939 169.836 354.106 169.836 355.548V360.17H155.103V355.548C155.103 354.106 156.271 352.939 157.714 352.939H157.725Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M169.88 360.17H159.323C158.386 360.17 157.626 359.41 157.626 358.475C157.626 357.539 158.386 356.791 159.323 356.791H169.88C170.817 356.791 171.566 357.539 171.577 358.475C171.577 359.41 170.817 360.17 169.88 360.17Z"
                                                fill="#E6E6E6" />
                                            <path
                                                d="M339.139 56.9011C353.088 53.6132 361.728 39.6548 358.435 25.7242C355.143 11.7936 341.166 3.166 327.216 6.45392C313.266 9.74184 304.627 23.7002 307.919 37.6308C311.212 51.5614 325.189 60.189 339.139 56.9011Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M333.175 53.6932C345.365 53.6932 355.248 43.8243 355.248 31.6503C355.248 19.4764 345.365 9.60742 333.175 9.60742C320.984 9.60742 311.102 19.4764 311.102 31.6503C311.102 43.8243 320.984 53.6932 333.175 53.6932Z"
                                                fill="#F0F0F0" />
                                            <path d="M334.222 16.5405V31.9474L344.437 26.1698" fill="#F0F0F0" />
                                            <path
                                                d="M334.222 33.0146C334.023 33.0146 333.825 32.9596 333.66 32.8606C333.329 32.6625 333.12 32.2993 333.12 31.9141V16.5072C333.12 15.902 333.616 15.4067 334.222 15.4067C334.828 15.4067 335.324 15.902 335.324 16.5072V30.0543L343.897 25.2121C344.426 24.915 345.098 25.1021 345.396 25.6303C345.693 26.1586 345.517 26.8299 344.988 27.127L334.762 32.9046C334.596 32.9816 334.409 33.0256 334.222 33.0146Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M84.8169 284.632C82.8333 281.33 79.5714 284.203 79.5714 284.203C80.0342 277.952 74.2818 273.682 74.2818 273.682C74.2818 273.682 80.9709 273.682 81.8966 267.31C82.8223 260.938 79.5714 263.898 76.5078 263.854C73.4442 263.81 70.2374 272.746 74.3038 277.776C78.3702 282.805 77.2572 291.389 67.9232 299.642C65.6862 301.733 64.0221 304.342 63.0524 307.236C63.7577 299.653 64.1544 288.968 61.9504 281.836C58.1595 269.731 65.3886 266.43 67.4604 260.399C69.5321 254.368 61.9504 249.218 61.9504 249.218C61.9504 249.218 69.1244 245.916 65.62 242.23C62.1157 238.543 54.8866 239.005 54.8866 243.88C54.8866 248.756 59.7905 250.615 59.7905 250.615C59.7905 250.615 65.3886 256.437 65.3886 259.419C65.3886 262.402 59.7905 268.972 59.7905 268.972C59.7905 268.972 62.3581 263.392 57.2228 263.161C52.0875 262.93 50.4565 269.676 52.5613 272.702C54.6662 275.729 58.1595 273.176 58.1595 273.176C58.3799 276.708 58.9089 280.219 59.7574 283.652C60.2864 285.402 60.0439 292.236 59.6031 299.345C58.6334 296.781 57.0685 294.47 55.0519 292.61C45.7179 284.357 44.638 275.773 48.6823 270.743C52.7266 265.714 49.5198 256.778 46.4783 256.822C43.4368 256.866 40.1418 253.895 41.0785 260.267C42.0152 266.639 48.7043 266.65 48.7043 266.65C48.7043 266.65 42.9409 270.92 43.4037 277.17C43.4037 277.17 40.0977 274.331 38.1582 277.6C34.6208 283.421 42.8307 287.031 44.2082 284.203C44.2082 284.203 61.6088 296.506 57.4322 314.213L58.4019 315.655C58.2807 317.085 58.2036 317.944 58.2036 317.944L59.559 317.36L61.1129 319.638C61.0578 322.214 61.19 324.789 61.5096 327.342L65.6641 321.201C61.4655 303.494 78.8881 291.191 78.8881 291.191C80.1554 294.074 88.3543 290.453 84.8169 284.632Z"
                                                fill="#E0E0E0" />
                                            <path opacity="0.2"
                                                d="M84.8169 284.632C82.8333 281.33 79.5714 284.203 79.5714 284.203C80.0342 277.952 74.2818 273.682 74.2818 273.682C74.2818 273.682 80.9709 273.682 81.8966 267.31C82.8223 260.938 79.5714 263.898 76.5078 263.854C73.4442 263.81 70.2374 272.746 74.3038 277.776C78.3702 282.805 77.2572 291.389 67.9232 299.642C65.6862 301.733 64.0221 304.342 63.0524 307.236C63.7577 299.653 64.1544 288.968 61.9504 281.836C58.1595 269.731 65.3886 266.43 67.4604 260.399C69.5321 254.368 61.9504 249.218 61.9504 249.218C61.9504 249.218 69.1244 245.916 65.62 242.23C62.1157 238.543 54.8866 239.005 54.8866 243.88C54.8866 248.756 59.7905 250.615 59.7905 250.615C59.7905 250.615 65.3886 256.437 65.3886 259.419C65.3886 262.402 59.7905 268.972 59.7905 268.972C59.7905 268.972 62.3581 263.392 57.2228 263.161C52.0875 262.93 50.4565 269.676 52.5613 272.702C54.6662 275.729 58.1595 273.176 58.1595 273.176C58.3799 276.708 58.9089 280.219 59.7574 283.652C60.2864 285.402 60.0439 292.236 59.6031 299.345C58.6334 296.781 57.0685 294.47 55.0519 292.61C45.7179 284.357 44.638 275.773 48.6823 270.743C52.7266 265.714 49.5198 256.778 46.4783 256.822C43.4368 256.866 40.1418 253.895 41.0785 260.267C42.0152 266.639 48.7043 266.65 48.7043 266.65C48.7043 266.65 42.9409 270.92 43.4037 277.17C43.4037 277.17 40.0977 274.331 38.1582 277.6C34.6208 283.421 42.8307 287.031 44.2082 284.203C44.2082 284.203 61.6088 296.506 57.4322 314.213L58.4019 315.655C58.2807 317.085 58.2036 317.944 58.2036 317.944L59.559 317.36L61.1129 319.638C61.0578 322.214 61.19 324.789 61.5096 327.342L65.6641 321.201C61.4655 303.494 78.8881 291.191 78.8881 291.191C80.1554 294.074 88.3543 290.453 84.8169 284.632Z"
                                                fill="#E0E0E0" />
                                            <path d="M81.4118 360.169H41.5524L37.2546 316.59H85.7206L81.4118 360.169Z"
                                                fill="#E6E6E6" />
                                            <path d="M87.8364 311.781H35.1167V321.399H87.8364V311.781Z" fill="#F0F0F0" />
                                            <path
                                                d="M253.5 410C371.505 410 467.167 404.423 467.167 397.543C467.167 390.662 371.505 385.085 253.5 385.085C135.495 385.085 39.8333 390.662 39.8333 397.543C39.8333 404.423 135.495 410 253.5 410Z"
                                                fill="#F5F5F5" />
                                            <path
                                                d="M430.316 362.855C430.481 361.755 434.338 335.156 426.613 325.978C425.059 324.019 422.701 322.863 420.199 322.819C404.595 322.456 402.468 334.925 402.446 335.09L404.287 335.376C404.353 334.925 406.204 324.371 420.155 324.679C422.128 324.712 423.979 325.626 425.192 327.166C432.377 335.717 428.498 362.305 428.498 362.58L430.316 362.855Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M430.316 362.855C430.481 361.755 434.338 335.156 426.613 325.978C425.059 324.019 422.701 322.863 420.199 322.819C404.595 322.456 402.468 334.925 402.446 335.09L404.287 335.376C404.353 334.925 406.204 324.371 420.155 324.679C422.128 324.712 423.979 325.626 425.192 327.166C432.377 335.717 428.498 362.305 428.498 362.58L430.316 362.855Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M431.252 361.645L433.115 361.579C433.115 361.336 432.498 337.093 444.454 332.085C456.18 327.188 461.458 337.269 461.668 337.698L463.332 336.861C463.277 336.74 457.083 324.756 443.738 330.38C430.602 335.871 431.219 360.588 431.252 361.645Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M431.252 361.645L433.115 361.579C433.115 361.336 432.498 337.093 444.454 332.085C456.18 327.188 461.458 337.269 461.668 337.698L463.332 336.861C463.277 336.74 457.083 324.756 443.738 330.38C430.602 335.871 431.219 360.588 431.252 361.645Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M431.198 363.549C431.198 363.163 431.319 324.822 438.801 313.608C445.986 302.834 457.535 307.908 458.075 308.106L458.836 306.411C458.703 306.356 445.325 300.457 437.248 312.552C429.456 324.228 429.346 361.92 429.346 363.527L431.198 363.549Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M431.198 363.549C431.198 363.163 431.319 324.822 438.801 313.608C445.986 302.834 457.535 307.908 458.075 308.106L458.836 306.411C458.703 306.356 445.325 300.457 437.248 312.552C429.456 324.228 429.346 361.92 429.346 363.527L431.198 363.549Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M417.962 323.744C417.962 323.744 424.773 326.253 422.745 332.162C420.717 338.072 399.195 347.822 399.195 347.822C399.195 347.822 390.17 339.569 398.457 326.143C406.744 312.717 417.775 319.507 417.962 323.744Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M417.962 323.744C417.962 323.744 424.773 326.253 422.745 332.162C420.717 338.072 399.195 347.822 399.195 347.822C399.195 347.822 390.17 339.569 398.457 326.143C406.744 312.717 417.775 319.507 417.962 323.744Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M439.132 311.583C439.132 311.583 434.305 311.066 434.724 308.128C435.143 305.189 453.524 297.618 464.379 309.855C464.379 309.855 457.425 321.785 447.375 321.961C437.325 322.137 439.132 311.583 439.132 311.583Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M439.132 311.583C439.132 311.583 434.305 311.066 434.724 308.128C435.143 305.189 453.524 297.618 464.379 309.855C464.379 309.855 457.425 321.785 447.375 321.961C437.325 322.137 439.132 311.583 439.132 311.583Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M444.146 331.249C444.146 331.249 440.84 328.564 444.411 327.254C447.981 325.945 465.679 326.308 465.855 343.762C465.855 343.762 445.281 347.184 442.713 340.526C440.146 333.868 444.146 331.249 444.146 331.249Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M444.146 331.249C444.146 331.249 440.84 328.564 444.411 327.254C447.981 325.945 465.679 326.308 465.855 343.762C465.855 343.762 445.281 347.184 442.713 340.526C440.146 333.868 444.146 331.249 444.146 331.249Z"
                                                fill="#FB5607" />
                                            <path opacity="0.2"
                                                d="M417.962 323.744C417.962 323.744 424.773 326.253 422.745 332.162C420.717 338.072 399.195 347.822 399.195 347.822C399.195 347.822 390.17 339.569 398.457 326.143C406.744 312.717 417.775 319.507 417.962 323.744Z"
                                                fill="black" />
                                            <path opacity="0.2"
                                                d="M439.132 311.583C439.132 311.583 434.305 311.066 434.724 308.128C435.143 305.189 453.524 297.618 464.379 309.855C464.379 309.855 457.425 321.785 447.375 321.961C437.325 322.137 439.132 311.583 439.132 311.583Z"
                                                fill="black" />
                                            <path opacity="0.2"
                                                d="M444.146 331.249C444.146 331.249 440.84 328.564 444.411 327.254C447.981 325.945 465.679 326.308 465.855 343.762C465.855 343.762 445.281 347.184 442.713 340.526C440.146 333.868 444.146 331.249 444.146 331.249Z"
                                                fill="black" />
                                            <path d="M414.304 398.456H446.24L449.678 363.548H410.866L414.304 398.456Z"
                                                fill="#FB5607" />
                                            <path d="M414.304 398.456H446.24L449.678 363.548H410.866L414.304 398.456Z"
                                                fill="#FB5607" />
                                            <path opacity="0.5"
                                                d="M414.304 398.456H446.24L449.678 363.548H410.866L414.304 398.456Z"
                                                fill="white" />
                                            <path d="M451.386 359.686H409.157V367.389H451.386V359.686Z" fill="#FB5607" />
                                            <path d="M451.386 359.686H409.157V367.389H451.386V359.686Z" fill="#FB5607" />
                                            <path opacity="0.2" d="M451.386 359.686H409.157V367.389H451.386V359.686Z"
                                                fill="white" />
                                            <path
                                                d="M378.158 373.43L346.41 370.316V325.746H333.825V370.294L301.988 373.43C298.825 373.739 296.412 376.402 296.412 379.571V384.336H383.779V379.571C383.779 376.38 381.343 373.717 378.158 373.43Z"
                                                fill="#263238" />
                                            <path opacity="0.2"
                                                d="M378.158 373.43L346.41 370.316V325.746H333.825V370.294L301.988 373.43C298.825 373.739 296.412 376.402 296.412 379.571V384.336H383.779V379.571C383.779 376.38 381.343 373.717 378.158 373.43Z"
                                                fill="white" />
                                            <path
                                                d="M299.729 398.467C304.275 398.467 307.961 394.786 307.961 390.246C307.961 385.706 304.275 382.025 299.729 382.025C295.183 382.025 291.497 385.706 291.497 390.246C291.497 394.786 295.183 398.467 299.729 398.467Z"
                                                fill="#263238" />
                                            <path
                                                d="M380.384 398.467C384.931 398.467 388.616 394.786 388.616 390.246C388.616 385.706 384.931 382.025 380.384 382.025C375.838 382.025 372.152 385.706 372.152 390.246C372.152 394.786 375.838 398.467 380.384 398.467Z"
                                                fill="#263238" />
                                            <path
                                                d="M331.665 295.637H348.581V330.775C348.581 333.285 346.542 335.321 344.029 335.321H336.216C333.704 335.321 331.665 333.285 331.665 330.775V295.637Z"
                                                fill="#263238" />
                                            <path opacity="0.3"
                                                d="M331.665 295.637H348.581V330.775C348.581 333.285 346.542 335.321 344.029 335.321H336.216C333.704 335.321 331.665 333.285 331.665 330.775V295.637Z"
                                                fill="white" />
                                            <path
                                                d="M370.202 225.986C370.202 225.986 372.604 285.413 356.03 295.637H374.952C374.952 295.637 389.608 275.399 385.465 225.986H370.202Z"
                                                fill="#263238" />
                                            <path opacity="0.3"
                                                d="M370.202 225.986C370.202 225.986 372.604 285.413 356.03 295.637H374.952C374.952 295.637 389.608 275.399 385.465 225.986H370.202Z"
                                                fill="white" />
                                            <path
                                                d="M381.387 300.192H296.621V292.83C296.621 289.793 299.09 287.328 302.131 287.328H375.877C378.919 287.328 381.387 289.793 381.387 292.83V300.192Z"
                                                fill="#263238" />
                                            <path
                                                d="M382.699 293.766H295.299C294.076 293.766 293.084 294.756 293.084 295.978V297.981C293.084 299.202 294.076 300.193 295.299 300.193H382.699C383.922 300.193 384.914 299.202 384.914 297.981V295.978C384.914 294.756 383.922 293.766 382.699 293.766Z"
                                                fill="#263238" />
                                            <path opacity="0.6"
                                                d="M382.699 293.766H295.299C294.076 293.766 293.084 294.756 293.084 295.978V297.981C293.084 299.202 294.076 300.193 295.299 300.193H382.699C383.922 300.193 384.914 299.202 384.914 297.981V295.978C384.914 294.756 383.922 293.766 382.699 293.766Z"
                                                fill="white" />
                                            <path
                                                d="M390.104 194.127H359.799C350.925 194.127 343.732 201.311 343.732 210.172V222.013C343.732 230.875 350.925 238.059 359.799 238.059H390.104C398.978 238.059 406.171 230.875 406.171 222.013V210.172C406.171 201.311 398.978 194.127 390.104 194.127Z"
                                                fill="#263238" />
                                            <path
                                                d="M267.881 145.573L261.831 129.649C261.831 129.649 264.432 127.25 262.647 124.818C260.861 122.386 249.709 115.552 247.681 116.751C245.654 117.951 241.125 122.485 243.571 125.005C246.017 127.525 256.795 131.718 256.795 131.718L262.151 152.627L267.881 145.573Z"
                                                fill="#E4897B" />
                                            <path
                                                d="M310.121 175.848C310.121 175.848 282.571 170.202 279.628 168.849C276.686 167.495 265.622 135.107 265.622 135.107L257.125 139.069C257.125 139.069 263.958 171.578 270.945 179.303C277.931 187.029 307.751 193.61 307.751 193.61L310.121 175.848Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M310.121 175.848C310.121 175.848 282.571 170.202 279.628 168.849C276.686 167.495 265.622 135.107 265.622 135.107L257.125 139.069C257.125 139.069 263.958 171.578 270.945 179.303C277.931 187.029 307.751 193.61 307.751 193.61L310.121 175.848Z"
                                                fill="#FB5607" />
                                            <path opacity="0.2"
                                                d="M307.685 193.577L307.178 193.456C305.68 193.114 300.974 192.014 295.387 190.374C286.318 187.744 274.879 183.771 270.89 179.314C263.914 171.611 257.071 139.069 257.071 139.069L265.556 135.107C265.556 135.107 276.631 167.506 279.628 168.849C282.626 170.191 310.121 175.848 310.121 175.848L307.685 193.577Z"
                                                fill="black" />
                                            <path
                                                d="M265.699 134.469L267.451 137.848L256.542 141.6L256.96 137.474L265.699 134.469Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M265.699 134.469L267.451 137.848L256.542 141.6L256.96 137.474L265.699 134.469Z"
                                                fill="#FB5607" />
                                            <path opacity="0.2"
                                                d="M307.895 193.126C306.374 192.905 301.602 192.168 295.894 190.925C299.145 185.312 308.666 182.429 308.666 182.429L307.895 193.126Z"
                                                fill="black" />
                                            <path
                                                d="M348.911 153.42C348.911 153.42 350.531 168.64 344.889 172.381C339.247 176.123 311.465 171.743 308.313 165.613C305.162 159.484 317.019 142.866 317.019 142.866L348.911 153.42Z"
                                                fill="#263238" />
                                            <path
                                                d="M236.518 353.688L243.769 355.437L247.439 345.445L250.767 336.355L242.513 332.844L239.339 343.871L236.518 353.688Z"
                                                fill="#E4897B" />
                                            <path opacity="0.2"
                                                d="M239.339 343.871L247.439 345.445L250.767 336.355L242.513 332.844L239.339 343.871Z"
                                                fill="black" />
                                            <path
                                                d="M240.067 338.6L250.117 342.331C250.117 342.331 276.929 275.388 282.439 275.2C287.949 275.013 344.051 300.721 358.113 286.437C372.174 272.152 351.842 237.707 351.842 237.707C351.842 237.707 318.022 232.886 315.477 240.513C314.848 242.758 314.375 245.047 314.044 247.358C313.658 249.691 313.394 251.65 313.394 251.65C312.347 251.386 278.394 242.637 265.016 251.65C251.406 260.817 240.067 338.6 240.067 338.6Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M240.067 338.6L250.117 342.331C250.117 342.331 276.929 275.388 282.439 275.2C287.949 275.013 344.051 300.721 358.113 286.437C372.174 272.152 351.842 237.707 351.842 237.707C351.842 237.707 318.022 232.886 315.477 240.513C314.848 242.758 314.375 245.047 314.044 247.358C313.658 249.691 313.394 251.65 313.394 251.65C312.347 251.386 278.394 242.637 265.016 251.65C251.406 260.817 240.067 338.6 240.067 338.6Z"
                                                fill="#FB5607" />
                                            <path opacity="0.6"
                                                d="M240.067 338.6L250.117 342.331C250.117 342.331 276.929 275.388 282.439 275.2C287.949 275.013 344.051 300.721 358.113 286.437C372.174 272.152 351.842 237.707 351.842 237.707C351.842 237.707 318.022 232.886 315.477 240.513C314.848 242.758 314.375 245.047 314.044 247.358C313.658 249.691 313.394 251.65 313.394 251.65C312.347 251.386 278.394 242.637 265.016 251.65C251.406 260.817 240.067 338.6 240.067 338.6Z"
                                                fill="white" />
                                            <path
                                                d="M297.878 382.246L305.096 380.408L303.707 370.052L302.418 360.566L293.492 361.369L295.806 372.429L297.878 382.246Z"
                                                fill="#E4897B" />
                                            <path opacity="0.2"
                                                d="M295.861 372.649L303.751 370.25L302.44 360.665L293.503 361.424L295.861 372.649Z"
                                                fill="black" />
                                            <path
                                                d="M254.272 338.611L239.626 333.647L238.998 339.634L250.106 343.552L254.272 338.611Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M254.272 338.611L239.626 333.647L238.998 339.634L250.106 343.552L254.272 338.611Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M333.825 289.826C333.825 289.826 331.533 289.881 296.059 288.23C296.059 288.23 301.36 332.514 304.258 365.672L293.646 367.477C293.646 367.477 268.3 296.484 268.575 285.204C268.851 273.924 281.799 270.623 281.799 270.623C281.799 270.623 307.068 285.204 333.825 289.826Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M333.825 289.826C333.825 289.826 331.533 289.881 296.059 288.23C296.059 288.23 301.36 332.514 304.258 365.672L293.646 367.477C293.646 367.477 268.3 296.484 268.575 285.204C268.851 273.924 281.799 270.623 281.799 270.623C281.799 270.623 307.068 285.204 333.825 289.826Z"
                                                fill="#FB5607" />
                                            <path opacity="0.6"
                                                d="M333.825 289.826C333.825 289.826 331.533 289.881 296.059 288.23C296.059 288.23 301.36 332.514 304.258 365.672L293.646 367.477C293.646 367.477 268.3 296.484 268.575 285.204C268.851 273.924 281.799 270.623 281.799 270.623C281.799 270.623 307.068 285.204 333.825 289.826Z"
                                                fill="white" />
                                            <path opacity="0.1"
                                                d="M333.825 289.826C333.825 289.826 331.533 289.881 296.059 288.23C296.059 288.23 301.36 332.514 304.258 365.672L293.646 367.477C293.646 367.477 268.3 296.484 268.575 285.204C268.851 273.924 281.799 270.623 281.799 270.623C281.799 270.623 307.068 285.204 333.825 289.826Z"
                                                fill="black" />
                                            <path
                                                d="M305.801 362.458L291.221 364.12L294.043 369.821L305.845 368.313L305.801 362.458Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M305.801 362.458L291.221 364.12L294.043 369.821L305.845 368.313L305.801 362.458Z"
                                                fill="#FB5607" />
                                            <path opacity="0.1"
                                                d="M313.394 251.65L333.175 255.766C333.175 255.766 322.243 249.735 314.044 247.358C313.658 249.691 313.394 251.65 313.394 251.65Z"
                                                fill="black" />
                                            <path
                                                d="M351.027 232.457L351.843 237.706L315.477 240.513L314.518 234.295L351.027 232.457Z"
                                                fill="#263238" />
                                            <path opacity="0.2"
                                                d="M351.027 232.457L351.843 237.706L315.477 240.513L314.518 234.295L351.027 232.457Z"
                                                fill="black" />
                                            <path
                                                d="M340.418 231.925L338.621 232.11L339.562 241.251L341.359 241.066L340.418 231.925Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M340.418 231.925L338.621 232.11L339.562 241.251L341.359 241.066L340.418 231.925Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M330.982 233.801L323.02 234.312L323.408 240.342L331.37 239.83L330.982 233.801Z"
                                                fill="white" />
                                            <path
                                                d="M318.097 232.89L316.3 233.074L317.241 242.215L319.038 242.031L318.097 232.89Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M318.097 232.89L316.3 233.074L317.241 242.215L319.038 242.031L318.097 232.89Z"
                                                fill="#FB5607" />
                                            <path opacity="0.6"
                                                d="M340.418 231.925L338.621 232.11L339.562 241.251L341.359 241.066L340.418 231.925Z"
                                                fill="white" />
                                            <path opacity="0.6"
                                                d="M318.097 232.89L316.3 233.074L317.241 242.215L319.038 242.031L318.097 232.89Z"
                                                fill="white" />
                                            <path
                                                d="M309.46 175.353C316.27 177.234 323.345 178.005 330.398 177.653C342.079 177.058 355.986 182.682 355.986 182.682L350.983 232.424L314.463 234.262C314.463 234.262 302.241 192.762 309.46 175.353Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M309.46 175.353C316.27 177.234 323.345 178.005 330.398 177.653C342.079 177.058 355.986 182.682 355.986 182.682L350.983 232.424L314.463 234.262C314.463 234.262 302.241 192.762 309.46 175.353Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M315.333 147.257C315.333 147.257 317.383 123.112 337.594 131.85C362.94 142.855 342.795 172.282 330.398 166.251C318 160.221 315.333 147.257 315.333 147.257Z"
                                                fill="#263238" />
                                            <path opacity="0.2"
                                                d="M320.998 179.006L321.582 192.652L326.111 186.237C326.111 186.237 324.491 201.324 325.439 209.545C325.439 209.545 326.309 194.809 328.359 186.237L333.175 192.652L340.084 179.094C340.084 179.094 328.899 175.078 320.998 179.006Z"
                                                fill="black" />
                                            <path
                                                d="M327.257 181.581L337.715 178.632C331.268 174.23 334.519 164.326 334.519 164.326L324.16 167.957C324.634 169.399 325.009 170.863 325.262 172.359C326.364 178.808 323.433 179.325 323.433 179.325L327.257 181.581Z"
                                                fill="#E4897B" />
                                            <path opacity="0.2"
                                                d="M324.16 167.902C324.634 169.344 325.009 170.807 325.262 172.304C330.221 170.312 334.508 164.249 334.508 164.249L324.16 167.902Z"
                                                fill="black" />
                                            <path
                                                d="M330.927 136.957C321.747 134.932 317.703 139.158 314.948 148.468C311.498 160.078 312.259 169.036 324.281 169.058C340.613 169.08 346.156 140.324 330.927 136.957Z"
                                                fill="#E4897B" />
                                            <path
                                                d="M320.987 149.271C319.951 150.482 318.772 151.549 317.482 152.473C317.857 153.376 318.716 153.981 319.686 154.047L320.987 149.271Z"
                                                fill="#DE5753" />
                                            <path
                                                d="M326.772 149.755C326.585 150.503 326.838 151.219 327.345 151.34C327.852 151.461 328.392 150.955 328.579 150.239C328.767 149.524 328.513 148.787 328.006 148.654C327.499 148.522 326.959 149.007 326.772 149.755Z"
                                                fill="#263238" />
                                            <path
                                                d="M328.204 148.71L326.739 147.675C326.739 147.675 327.213 149.249 328.204 148.71Z"
                                                fill="#263238" />
                                            <path
                                                d="M317.493 147.312C317.306 148.06 317.559 148.776 318.066 148.897C318.573 149.018 319.168 148.512 319.301 147.796C319.433 147.081 319.234 146.344 318.728 146.212C318.221 146.08 317.681 146.564 317.493 147.312Z"
                                                fill="#263238" />
                                            <path
                                                d="M318.926 146.267L317.416 145.265C317.416 145.265 317.934 146.795 318.926 146.267Z"
                                                fill="#263238" />
                                            <path
                                                d="M331.941 146.113C331.786 146.113 331.654 146.036 331.577 145.904C330.839 144.759 329.626 144 328.271 143.857C328.051 143.824 327.896 143.637 327.907 143.416C327.929 143.196 328.128 143.031 328.348 143.053C329.99 143.207 331.467 144.132 332.337 145.54C332.437 145.738 332.359 145.97 332.172 146.08C332.106 146.113 332.029 146.124 331.952 146.113H331.941Z"
                                                fill="#263238" />
                                            <path
                                                d="M321.681 141.963C321.604 141.963 321.537 141.941 321.471 141.897C320.369 141.369 319.102 141.369 318 141.897C317.802 141.974 317.581 141.886 317.493 141.688C317.416 141.479 317.504 141.248 317.714 141.16C319.047 140.544 320.59 140.577 321.901 141.248C322.089 141.369 322.144 141.611 322.022 141.798C321.945 141.908 321.813 141.974 321.681 141.963Z"
                                                fill="#263238" />
                                            <path
                                                d="M337.528 154.608C337.528 154.608 334.905 146.134 336.844 140.467C336.844 140.467 320.314 129.033 315.333 147.257C315.333 147.257 317.174 130.507 333.031 133.633C348.889 136.758 343.699 159.77 334.034 164.832C334.034 164.832 339.136 159.902 337.528 154.608Z"
                                                fill="#263238" />
                                            <path
                                                d="M335.599 156.27C336.271 154.102 338.574 152.891 340.745 153.552C343.522 154.487 343.577 160.617 336.205 160.452C335.136 160.375 334.783 159.263 335.599 156.27Z"
                                                fill="#E4897B" />
                                            <path
                                                d="M318.022 157.525C318.265 158.647 318.43 159.792 318.507 160.936H319.102C321.846 161.167 323.191 160.364 323.852 159.417C324.171 158.944 324.37 158.405 324.425 157.844C324.469 157.525 324.469 157.205 324.425 156.886C322.651 157.492 320.777 157.712 318.915 157.536C318.386 157.569 318.022 157.525 318.022 157.525Z"
                                                fill="#263238" />
                                            <path
                                                d="M318.959 157.591L319.124 158.592C321.703 158.801 323.532 158.592 324.425 157.899C324.469 157.58 324.469 157.261 324.425 156.941C322.672 157.547 320.81 157.767 318.959 157.591Z"
                                                fill="white" />
                                            <path
                                                d="M319.102 160.991C321.846 161.222 323.19 160.419 323.852 159.473C322.816 159.407 321.769 159.517 320.766 159.814C320.105 160.023 319.521 160.43 319.102 160.991Z"
                                                fill="#DE5753" />
                                            <path
                                                d="M330.96 137.694C330.96 137.694 331.312 153.574 340.878 155.489C350.443 157.404 339.996 135.064 339.996 135.064C339.996 135.064 325.78 125.798 316.303 132.335C306.826 138.872 315.355 147.257 315.355 147.257C315.355 147.257 317.328 135.46 330.96 137.694Z"
                                                fill="#263238" />
                                            <path
                                                d="M334.607 152.231C334.541 152.231 334.475 152.209 334.431 152.165C327.643 146.839 330.993 136.648 331.026 136.549C331.081 136.406 331.235 136.329 331.379 136.373C331.522 136.428 331.599 136.582 331.544 136.725C331.544 136.824 328.293 146.63 334.773 151.736C334.883 151.835 334.883 152 334.784 152.11H334.773C334.74 152.176 334.674 152.22 334.607 152.231Z"
                                                fill="#263238" />
                                            <path
                                                d="M343.643 158.746C342.431 161.982 339.313 163.798 336.679 162.818C334.045 161.839 332.899 158.416 334.111 155.181C335.323 151.945 338.442 150.13 341.076 151.12C343.71 152.11 344.856 155.522 343.643 158.746Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M343.643 158.746C342.431 161.982 339.313 163.798 336.679 162.818C334.045 161.839 332.899 158.416 334.111 155.181C335.323 151.945 338.442 150.13 341.076 151.12C343.71 152.11 344.856 155.522 343.643 158.746Z"
                                                fill="#FB5607" />
                                            <path opacity="0.4"
                                                d="M343.643 158.746C342.431 161.982 339.313 163.798 336.679 162.818C334.045 161.839 332.899 158.416 334.111 155.181C335.323 151.945 338.442 150.13 341.076 151.12C343.71 152.11 344.856 155.522 343.643 158.746Z"
                                                fill="black" />
                                            <path
                                                d="M340.558 153.453C340.558 153.453 344.514 135.768 335.643 131.135C336.657 131.267 337.66 131.465 338.641 131.718C339.743 132.048 346.872 139.223 343.291 155.115L340.558 153.453Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M340.558 153.453C340.558 153.453 344.514 135.768 335.643 131.135C336.657 131.267 337.66 131.465 338.641 131.718C339.743 132.048 346.872 139.223 343.291 155.115L340.558 153.453Z"
                                                fill="#FB5607" />
                                            <path opacity="0.2"
                                                d="M340.558 153.453C340.558 153.453 344.514 135.768 335.643 131.135C336.657 131.267 337.66 131.465 338.641 131.718C339.743 132.048 346.872 139.223 343.291 155.115L340.558 153.453Z"
                                                fill="black" />
                                            <path
                                                d="M324.028 163.577L323.367 163.478L323.543 162.378C328.414 163.126 333.384 162.07 337.527 159.417L338.178 160.298C334.012 163.06 328.987 164.216 324.028 163.577Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M324.028 163.577L323.367 163.478L323.543 162.378C328.414 163.126 333.384 162.07 337.527 159.417L338.178 160.298C334.012 163.06 328.987 164.216 324.028 163.577Z"
                                                fill="#FB5607" />
                                            <g opacity="0.2">
                                                <path
                                                    d="M324.028 163.577L323.367 163.478L323.543 162.378C328.414 163.126 333.384 162.07 337.527 159.417L338.178 160.298C334.012 163.06 328.987 164.216 324.028 163.577Z"
                                                    fill="black" />
                                            </g>
                                            <path
                                                d="M343.269 158.306C342.475 160.441 340.404 161.608 338.673 160.991C336.943 160.375 336.172 158.086 336.976 155.951C337.781 153.816 339.842 152.65 341.572 153.266C343.302 153.882 344.073 156.171 343.269 158.306Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M343.269 158.306C342.475 160.441 340.404 161.608 338.673 160.991C336.943 160.375 336.172 158.086 336.976 155.951C337.781 153.816 339.842 152.65 341.572 153.266C343.302 153.882 344.073 156.171 343.269 158.306Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M322.992 163.973L322.1 163.852C321.449 163.764 320.987 163.17 321.075 162.521C321.152 161.86 321.747 161.398 322.397 161.475H322.419L323.301 161.596C323.951 161.684 324.414 162.29 324.337 162.939C324.248 163.588 323.642 164.05 322.992 163.973Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M322.992 163.973L322.1 163.852C321.449 163.764 320.987 163.17 321.075 162.521C321.152 161.86 321.747 161.398 322.397 161.475H322.419L323.301 161.596C323.951 161.684 324.414 162.29 324.337 162.939C324.248 163.588 323.642 164.05 322.992 163.973Z"
                                                fill="#FB5607" />
                                            <path opacity="0.4"
                                                d="M322.992 163.973L322.1 163.852C321.449 163.764 320.987 163.17 321.075 162.521C321.152 161.86 321.747 161.398 322.397 161.475H322.419L323.301 161.596C323.951 161.684 324.414 162.29 324.337 162.939C324.248 163.588 323.642 164.05 322.992 163.973Z"
                                                fill="black" />
                                            <path
                                                d="M334.905 174.813L328.359 181.229L330.982 189.109L340.084 179.094L334.905 174.813Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M334.905 174.813L328.359 181.229L330.982 189.109L340.084 179.094L334.905 174.813Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M325.439 176.156L326.497 181.097L323.113 188.086L320.998 179.007L325.439 176.156Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M325.439 176.156L326.497 181.097L323.113 188.086L320.998 179.007L325.439 176.156Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M333.505 180.382L337.307 166.483C337.307 166.483 335.467 163.027 335.864 162.301C336.26 161.575 338.244 152.242 339.655 151.23C341.065 150.217 346.873 151.945 347.457 152.892C348.041 153.838 341.892 166.483 341.892 166.483L339.688 181.549L333.505 180.382Z"
                                                fill="#E4897B" />
                                            <path
                                                d="M355.986 182.682C366.455 193.379 345.484 217.611 333.461 216.577C321.438 215.543 333.769 171.611 333.769 171.611L341.483 172.876C341.483 172.876 338.784 191.893 339.632 193.379C340.481 194.864 352.515 179.127 355.986 182.682Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M355.986 182.682C366.455 193.379 345.484 217.611 333.461 216.577C321.438 215.543 333.769 171.611 333.769 171.611L341.483 172.876C341.483 172.876 338.784 191.893 339.632 193.379C340.481 194.864 352.515 179.127 355.986 182.682Z"
                                                fill="#FB5607" />
                                            <path opacity="0.2"
                                                d="M355.986 182.682C366.455 193.379 345.484 217.611 333.461 216.577C321.438 215.543 333.769 171.611 333.769 171.611L341.483 172.876C341.483 172.876 338.784 191.893 339.632 193.379C340.481 194.864 352.515 179.127 355.986 182.682Z"
                                                fill="black" />
                                            <path
                                                d="M333.175 170.235L332.04 173.867L342.762 174.813V171.644L333.175 170.235Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M333.175 170.235L332.04 173.867L342.762 174.813V171.644L333.175 170.235Z"
                                                fill="#FB5607" />
                                            <path opacity="0.6"
                                                d="M316.92 198.969H312.578C312.098 198.969 311.708 199.358 311.708 199.839V208.026C311.708 208.506 312.098 208.896 312.578 208.896H316.92C317.401 208.896 317.791 208.506 317.791 208.026V199.839C317.791 199.358 317.401 198.969 316.92 198.969Z"
                                                fill="white" />
                                            <path opacity="0.2" d="M317.008 199.629H312.071V206.375H317.008V199.629Z"
                                                fill="black" />
                                            <path d="M315.201 196.581H314.11V200.554H315.201V196.581Z" fill="#263238" />
                                            <path
                                                d="M224.528 367.752C225.63 367.246 226.81 366.938 228.022 366.861C228.022 366.861 232.209 364.407 236.353 354.843H241.014C242.634 354.854 244.067 355.878 244.607 357.407C244.684 357.616 244.728 357.826 244.739 358.046C244.684 359.168 244.563 360.291 244.375 361.402C243.692 365.122 242.789 368.798 241.654 372.407L240.86 372.209L242.293 365.254C242.778 362.899 240.287 365.177 239.141 367.554C237.995 369.931 236.221 372.341 231.063 371.164C225.057 369.689 222.644 368.831 224.528 367.752Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M224.528 367.752C225.63 367.246 226.81 366.938 228.022 366.861C228.022 366.861 232.209 364.407 236.353 354.843H241.014C242.634 354.854 244.067 355.878 244.607 357.407C244.684 357.616 244.728 357.826 244.739 358.046C244.684 359.168 244.563 360.291 244.375 361.402C243.692 365.122 242.789 368.798 241.654 372.407L240.86 372.209L242.293 365.254C242.778 362.899 240.287 365.177 239.141 367.554C237.995 369.931 236.221 372.341 231.063 371.164C225.057 369.689 222.644 368.831 224.528 367.752Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M237.201 352.345C237.201 352.345 231.372 364.516 228.022 366.86C228.022 366.86 232.518 369.535 237.201 363.559C243.251 355.856 244.739 358.002 244.739 358.002C244.607 356.67 244.364 355.36 244.001 354.073C243.097 351.608 237.201 352.345 237.201 352.345Z"
                                                fill="#E4897B" />
                                            <path
                                                d="M288.687 396.75C289.635 396.002 290.715 395.429 291.872 395.055C291.872 395.055 295.354 391.677 297.106 381.409L301.635 380.309C303.211 379.945 304.842 380.606 305.724 381.959C305.845 382.146 305.944 382.344 306.01 382.554C306.231 383.643 306.385 384.744 306.462 385.855C306.671 389.619 306.66 393.382 306.407 397.146H305.592L305.338 390.059C305.239 387.649 303.377 390.455 302.815 393.041C302.252 395.627 301.117 398.368 295.828 398.445C289.668 398.511 287.111 398.247 288.687 396.75Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M288.687 396.75C289.635 396.002 290.715 395.429 291.872 395.055C291.872 395.055 295.354 391.677 297.106 381.409L301.635 380.309C303.211 379.945 304.842 380.606 305.724 381.959C305.845 382.146 305.944 382.344 306.01 382.554C306.231 383.643 306.385 384.744 306.462 385.855C306.671 389.619 306.66 393.382 306.407 397.146H305.592L305.338 390.059C305.239 387.649 303.377 390.455 302.815 393.041C302.252 395.627 301.117 398.368 295.828 398.445C289.668 398.511 287.111 398.247 288.687 396.75Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M297.338 378.779C297.338 378.779 294.572 391.985 291.828 395.055C291.828 395.055 296.831 396.596 299.96 389.696C304.016 380.782 305.966 382.521 305.966 382.521C305.525 381.255 304.986 380.045 304.324 378.878C302.892 376.677 297.338 378.779 297.338 378.779Z"
                                                fill="#E4897B" />
                                            <path
                                                d="M399.802 112.416H361.331C358.245 112.416 355.744 114.914 355.744 117.995V134.425C355.744 137.507 358.245 140.005 361.331 140.005H399.802C402.887 140.005 405.389 137.507 405.389 134.425V117.995C405.389 114.914 402.887 112.416 399.802 112.416Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M399.802 112.416H361.331C358.245 112.416 355.744 114.914 355.744 117.995V134.425C355.744 137.507 358.245 140.005 361.331 140.005H399.802C402.887 140.005 405.389 137.507 405.389 134.425V117.995C405.389 114.914 402.887 112.416 399.802 112.416Z"
                                                fill="#FB5607" />
                                            <path d="M369.045 136.857L357.452 152.594L376.153 137.914L369.045 136.857Z"
                                                fill="#FB5607" />
                                            <path d="M369.045 136.857L357.452 152.594L376.153 137.914L369.045 136.857Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M369.474 126.205C369.474 127.107 368.758 127.833 367.854 127.844C366.951 127.855 366.224 127.129 366.213 126.227C366.202 125.324 366.929 124.598 367.832 124.587C367.832 124.587 367.843 124.587 367.854 124.587C368.747 124.587 369.474 125.313 369.474 126.205Z"
                                                fill="white" />
                                            <path
                                                d="M377.949 126.205C377.949 127.107 377.233 127.833 376.329 127.844C375.425 127.855 374.698 127.129 374.687 126.227C374.676 125.324 375.403 124.598 376.307 124.587C376.307 124.587 376.318 124.587 376.329 124.587C377.222 124.587 377.949 125.313 377.949 126.205Z"
                                                fill="white" />
                                            <path
                                                d="M386.423 126.205C386.423 127.107 385.707 127.833 384.803 127.844C383.9 127.855 383.172 127.129 383.161 126.227C383.15 125.324 383.878 124.598 384.781 124.587C384.781 124.587 384.792 124.587 384.803 124.587C385.696 124.587 386.423 125.313 386.423 126.205Z"
                                                fill="white" />
                                            <path
                                                d="M394.898 126.205C394.898 127.107 394.181 127.833 393.278 127.844C392.374 127.855 391.647 127.129 391.636 126.227C391.625 125.324 392.352 124.598 393.256 124.587C393.256 124.587 393.267 124.587 393.278 124.587C394.17 124.587 394.898 125.313 394.898 126.205Z"
                                                fill="white" />
                                            <path
                                                d="M225.844 85.2553L217.085 101.494C216.687 102.232 216.963 103.153 217.703 103.551L245.15 118.315C245.889 118.713 246.811 118.437 247.21 117.699L255.969 101.46C256.367 100.722 256.091 99.8008 255.351 99.403L227.904 84.6385C227.165 84.2407 226.243 84.5169 225.844 85.2553Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M225.844 85.2553L217.085 101.494C216.687 102.232 216.963 103.153 217.703 103.551L245.15 118.315C245.889 118.713 246.811 118.437 247.21 117.699L255.969 101.46C256.367 100.722 256.091 99.8008 255.351 99.403L227.904 84.6385C227.165 84.2407 226.243 84.5169 225.844 85.2553Z"
                                                fill="#FB5607" />
                                            <path opacity="0.7"
                                                d="M225.844 85.2553L217.085 101.494C216.687 102.232 216.963 103.153 217.703 103.551L245.15 118.315C245.889 118.713 246.811 118.437 247.21 117.699L255.969 101.46C256.367 100.722 256.091 99.8008 255.351 99.403L227.904 84.6385C227.165 84.2407 226.243 84.5169 225.844 85.2553Z"
                                                fill="white" />
                                            <path opacity="0.2"
                                                d="M225.124 86.5981L233.664 102.61C234.336 103.854 235.692 104.58 237.102 104.437L254.966 102.676L236.783 105.351C235.152 105.593 233.554 104.734 232.86 103.238L225.124 86.5981Z"
                                                fill="black" />
                                            <path
                                                d="M204.285 83.6377C204.582 77.5189 209.122 65.1824 214.643 61.4077C220.165 57.633 216.528 62.8603 216.528 62.8603C216.528 62.8603 221.762 57.776 224.517 57.9301C227.272 58.0842 224.517 61.2316 224.517 61.2316C224.517 61.2316 230.193 57.743 232.804 57.9301C235.416 58.1172 232.804 61.1326 232.804 61.1326C232.804 61.1326 237.455 57.8311 239.339 59.3828C241.224 60.9345 215.217 78.0912 212.318 85.0683C209.42 92.0454 203.987 89.8114 204.285 83.6377Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M204.285 83.6377C204.582 77.5189 209.122 65.1824 214.643 61.4077C220.165 57.633 216.528 62.8603 216.528 62.8603C216.528 62.8603 221.762 57.776 224.517 57.9301C227.272 58.0842 224.517 61.2316 224.517 61.2316C224.517 61.2316 230.193 57.743 232.804 57.9301C235.416 58.1172 232.804 61.1326 232.804 61.1326C232.804 61.1326 237.455 57.8311 239.339 59.3828C241.224 60.9345 215.217 78.0912 212.318 85.0683C209.42 92.0454 203.987 89.8114 204.285 83.6377Z"
                                                fill="#FB5607" />
                                            <path opacity="0.4"
                                                d="M204.285 83.6377C204.582 77.5189 209.122 65.1824 214.643 61.4077C220.165 57.633 216.528 62.8603 216.528 62.8603C216.528 62.8603 221.762 57.776 224.517 57.9301C227.272 58.0842 224.517 61.2316 224.517 61.2316C224.517 61.2316 230.193 57.743 232.804 57.9301C235.416 58.1172 232.804 61.1326 232.804 61.1326C232.804 61.1326 237.455 57.8311 239.339 59.3828C241.224 60.9345 215.217 78.0912 212.318 85.0683C209.42 92.0454 203.987 89.8114 204.285 83.6377Z"
                                                fill="white" />
                                            <path
                                                d="M226.633 82.7134L230.105 84.9144C230.237 85.0024 230.281 85.1785 230.193 85.3105C230.138 85.3986 230.027 85.4536 229.928 85.4426L226.281 85.1565L226.589 87.9517C226.611 88.1168 226.49 88.2709 226.325 88.3039C226.225 88.3149 226.115 88.2819 226.049 88.1938L223.944 85.8388L226.633 82.7134Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M226.633 82.7134L230.105 84.9144C230.237 85.0024 230.281 85.1785 230.193 85.3105C230.138 85.3986 230.027 85.4536 229.928 85.4426L226.281 85.1565L226.589 87.9517C226.611 88.1168 226.49 88.2709 226.325 88.3039C226.225 88.3149 226.115 88.2819 226.049 88.1938L223.944 85.8388L226.633 82.7134Z"
                                                fill="#FB5607" />
                                            <path opacity="0.3"
                                                d="M226.633 82.7134L230.105 84.9144C230.237 85.0024 230.281 85.1785 230.193 85.3105C230.138 85.3986 230.027 85.4536 229.928 85.4426L226.281 85.1565L226.589 87.9517C226.611 88.1168 226.49 88.2709 226.325 88.3039C226.225 88.3149 226.115 88.2819 226.049 88.1938L223.944 85.8388L226.633 82.7134Z"
                                                fill="white" />
                                            <path
                                                d="M177.87 68.9351C177.87 68.9351 182.675 65.6336 189.937 67.7685C189.937 67.7685 192.02 77.3538 197.739 80.5453C200.88 82.2951 208.561 82.141 214.644 80.1821C221.862 77.8491 225.388 77.8491 226.699 80.5453C228.011 83.2415 226.556 86.0477 221.035 87.3573C215.514 88.6669 211.117 98.2412 201.122 98.3623C191.127 98.4833 185.815 88.4578 188.339 79.6539C185.948 75.1528 182.311 71.4332 177.87 68.9351Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M177.87 68.9351C177.87 68.9351 182.675 65.6336 189.937 67.7685C189.937 67.7685 192.02 77.3538 197.739 80.5453C200.88 82.2951 208.561 82.141 214.644 80.1821C221.862 77.8491 225.388 77.8491 226.699 80.5453C228.011 83.2415 226.556 86.0477 221.035 87.3573C215.514 88.6669 211.117 98.2412 201.122 98.3623C191.127 98.4833 185.815 88.4578 188.339 79.6539C185.948 75.1528 182.311 71.4332 177.87 68.9351Z"
                                                fill="#FB5607" />
                                            <path opacity="0.5"
                                                d="M177.87 68.9351C177.87 68.9351 182.675 65.6336 189.937 67.7685C189.937 67.7685 192.02 77.3538 197.739 80.5453C200.88 82.2951 208.561 82.141 214.644 80.1821C221.862 77.8491 225.388 77.8491 226.699 80.5453C228.011 83.2415 226.556 86.0477 221.035 87.3573C215.514 88.6669 211.117 98.2412 201.122 98.3623C191.127 98.4833 185.815 88.4578 188.339 79.6539C185.948 75.1528 182.311 71.4332 177.87 68.9351Z"
                                                fill="white" />
                                            <path
                                                d="M223.944 82.3609C223.944 82.6361 223.724 82.8562 223.449 82.8562C223.173 82.8562 222.953 82.6361 222.953 82.3609C222.953 82.0858 223.173 81.8657 223.449 81.8657C223.724 81.8657 223.944 82.0858 223.944 82.3609Z"
                                                fill="#263238" />
                                            <path
                                                d="M198.797 90.4166C192.879 92.0233 179.721 91.5171 174.431 87.4453C169.142 83.3734 175.225 85.2443 175.225 85.2443C175.225 85.2443 168.778 81.8438 168.062 79.1806C167.346 76.5174 171.236 78.1461 171.236 78.1461C171.236 78.1461 166.166 73.8432 165.505 71.312C164.844 68.7809 168.547 70.3216 168.547 70.3216C168.547 70.3216 163.929 66.9321 164.866 64.654C165.803 62.376 190.146 81.7887 197.673 82.394C205.199 82.9993 204.792 88.7879 198.797 90.4166Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M198.797 90.4166C192.879 92.0233 179.721 91.5171 174.431 87.4453C169.142 83.3734 175.225 85.2443 175.225 85.2443C175.225 85.2443 168.778 81.8438 168.062 79.1806C167.346 76.5174 171.236 78.1461 171.236 78.1461C171.236 78.1461 166.166 73.8432 165.505 71.312C164.844 68.7809 168.547 70.3216 168.547 70.3216C168.547 70.3216 163.929 66.9321 164.866 64.654C165.803 62.376 190.146 81.7887 197.673 82.394C205.199 82.9993 204.792 88.7879 198.797 90.4166Z"
                                                fill="#FB5607" />
                                            <path opacity="0.4"
                                                d="M198.797 90.4166C192.879 92.0233 179.721 91.5171 174.431 87.4453C169.142 83.3734 175.225 85.2443 175.225 85.2443C175.225 85.2443 168.778 81.8438 168.062 79.1806C167.346 76.5174 171.236 78.1461 171.236 78.1461C171.236 78.1461 166.166 73.8432 165.505 71.312C164.844 68.7809 168.547 70.3216 168.547 70.3216C168.547 70.3216 163.929 66.9321 164.866 64.654C165.803 62.376 190.146 81.7887 197.673 82.394C205.199 82.9993 204.792 88.7879 198.797 90.4166Z"
                                                fill="white" />
                                            <path
                                                d="M160.006 63.6419C160.006 63.6419 159.918 63.6419 159.874 63.6419C158.849 63.2788 157.802 62.9376 156.744 62.6185C156.524 62.5524 156.403 62.3213 156.469 62.1012C156.535 61.8811 156.766 61.7601 156.987 61.8261C158.089 62.1452 159.114 62.4974 160.15 62.9266C160.359 63.0036 160.48 63.2347 160.403 63.4438C160.348 63.6089 160.183 63.719 160.006 63.719V63.6419Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M160.006 63.6419C160.006 63.6419 159.918 63.6419 159.874 63.6419C158.849 63.2788 157.802 62.9376 156.744 62.6185C156.524 62.5524 156.403 62.3213 156.469 62.1012C156.535 61.8811 156.766 61.7601 156.987 61.8261C158.089 62.1452 159.114 62.4974 160.15 62.9266C160.359 63.0036 160.48 63.2347 160.403 63.4438C160.348 63.6089 160.183 63.719 160.006 63.719V63.6419Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M93.4014 152.969C93.17 152.969 92.9937 152.793 92.9827 152.562C92.9827 152.331 93.159 152.154 93.3904 152.143C95.5834 152.11 97.7653 151.901 99.9253 151.505C100.146 151.461 100.366 151.615 100.41 151.835C100.454 152.055 100.311 152.276 100.091 152.32H100.08C97.8755 152.727 95.6385 152.947 93.4014 152.969ZM86.7894 152.617C84.5634 152.375 82.3594 152.011 80.1774 151.516C79.957 151.472 79.8138 151.241 79.8578 151.021C79.9129 150.801 80.1333 150.669 80.3537 150.713C82.5026 151.197 84.6736 151.56 86.8555 151.813C87.087 151.846 87.2412 152.066 87.1972 152.298C87.1641 152.474 87.0319 152.617 86.8555 152.639L86.7894 152.617ZM106.372 150.416C106.207 150.416 106.063 150.317 105.997 150.174C105.898 149.975 105.997 149.722 106.185 149.634H106.207C108.212 148.765 110.064 147.598 111.717 146.179C111.904 146.036 112.168 146.069 112.301 146.256C112.433 146.421 112.411 146.652 112.268 146.806C110.549 148.281 108.62 149.48 106.548 150.383C106.482 150.416 106.416 150.438 106.35 150.438L106.372 150.416ZM73.874 149.667C73.874 149.667 73.7858 149.667 73.7417 149.667C71.6479 148.974 69.5431 148.16 67.5044 147.268C67.3061 147.158 67.2289 146.894 67.3501 146.696C67.4493 146.52 67.6587 146.443 67.846 146.509C69.8517 147.389 71.9234 148.193 74.0062 148.886C74.2156 148.963 74.3368 149.194 74.2597 149.414C74.1936 149.568 74.0393 149.667 73.874 149.667ZM61.752 144.319C61.6859 144.341 61.6197 144.341 61.5536 144.319C59.581 143.218 57.6636 142.03 55.8783 140.786C55.691 140.654 55.6469 140.401 55.7791 140.214C55.9114 140.027 56.1648 139.983 56.3522 140.115C58.1154 141.337 59.9998 142.514 61.9614 143.604C62.1597 143.714 62.2258 143.956 62.1156 144.154C62.0165 144.308 61.8512 144.385 61.6748 144.352L61.752 144.319ZM116.235 141.799C116.169 141.821 116.103 141.821 116.037 141.799C115.838 141.689 115.772 141.447 115.882 141.249C116.224 140.643 116.543 140.027 116.83 139.389C117.447 138.046 117.921 136.637 118.263 135.196C118.318 134.976 118.549 134.844 118.769 134.888C118.99 134.943 119.122 135.174 119.067 135.394C118.703 136.88 118.207 138.332 117.579 139.73C117.282 140.39 116.951 141.039 116.599 141.656C116.499 141.799 116.323 141.865 116.158 141.832L116.235 141.799ZM50.8863 136.715C50.7871 136.715 50.6989 136.682 50.6218 136.615C48.9467 135.13 47.3709 133.534 45.9162 131.839C45.762 131.674 45.762 131.421 45.9162 131.256C46.0705 131.102 46.335 131.102 46.4893 131.256C47.9219 132.918 49.4647 134.481 51.1067 135.933C51.2609 136.098 51.2609 136.351 51.1067 136.516C51.0516 136.637 50.9414 136.726 50.8091 136.748L50.8863 136.715ZM119.409 129.077C119.188 129.077 119.001 128.89 119.001 128.67C118.99 126.469 118.78 124.29 118.395 122.133C118.351 121.913 118.505 121.693 118.725 121.649C118.957 121.616 119.166 121.77 119.21 121.99C119.607 124.191 119.816 126.425 119.827 128.659C119.827 128.89 119.64 129.077 119.409 129.077ZM117.205 116.025C117.017 116.025 116.863 115.904 116.808 115.728C116.246 113.802 115.552 111.755 114.703 109.466C114.615 109.257 114.714 109.015 114.923 108.938H114.946C115.155 108.85 115.397 108.96 115.474 109.169C116.334 111.48 117.028 113.571 117.601 115.486C117.667 115.706 117.546 115.937 117.326 116.003L117.205 116.025ZM112.642 103.535C112.488 103.535 112.345 103.447 112.279 103.304C111.573 101.543 110.615 99.5178 109.612 97.3719V97.2618C109.546 97.0417 109.667 96.8106 109.898 96.7446C110.075 96.6896 110.262 96.7556 110.361 96.9097V97.0197C111.375 99.2207 112.323 101.213 113.028 102.94C113.116 103.16 113.028 103.403 112.808 103.502L112.642 103.535ZM107.132 91.4292C106.967 91.4292 106.813 91.3412 106.747 91.1871C105.755 88.8871 104.961 86.8512 104.333 84.9693C104.256 84.7492 104.377 84.5181 104.587 84.4411C104.807 84.364 105.039 84.4851 105.116 84.7052C105.733 86.565 106.515 88.5789 107.507 90.8569C107.595 91.066 107.507 91.3082 107.298 91.3962C107.298 91.3962 107.221 91.4732 107.165 91.4842L107.143 91.4292H107.132ZM103.099 78.8176C102.901 78.8176 102.724 78.6635 102.691 78.4654C102.504 77.2879 102.405 76.0993 102.405 74.8998C102.405 73.8323 102.493 72.7648 102.691 71.7194C102.757 71.4993 103 71.3782 103.22 71.4552C103.408 71.5103 103.529 71.6974 103.507 71.8844C103.319 72.8749 103.22 73.8873 103.231 74.8998C103.231 76.0553 103.33 77.1998 103.507 78.3443C103.529 78.5644 103.386 78.7735 103.165 78.8176H103.099ZM105.975 66.3159C105.876 66.3159 105.788 66.2829 105.711 66.2279C105.556 66.0628 105.556 65.8097 105.711 65.6446C107.187 63.9169 108.995 62.4972 111.011 61.4518C111.21 61.3417 111.463 61.4187 111.573 61.6168C111.673 61.8259 111.595 62.068 111.397 62.1781C109.469 63.1685 107.76 64.5331 106.35 66.1729C106.273 66.2939 106.141 66.371 105.997 66.371L105.975 66.3159ZM150.408 60.9235H150.32C148.204 60.4833 146.011 60.1092 143.796 59.823C143.575 59.79 143.41 59.5919 143.443 59.3718C143.476 59.1407 143.675 58.9867 143.895 59.0087C146.099 59.2948 148.303 59.669 150.507 60.1092C150.727 60.1642 150.871 60.3843 150.827 60.6154C150.783 60.8025 150.628 60.9345 150.43 60.9345H150.397L150.408 60.9235ZM117.348 59.9771C117.127 59.9991 116.918 59.834 116.896 59.6139C116.874 59.3938 117.039 59.1847 117.26 59.1627C119.431 58.6785 121.646 58.3594 123.872 58.2053C124.103 58.1943 124.29 58.3594 124.313 58.5905C124.335 58.8106 124.169 59.0087 123.938 59.0307H123.927C121.734 59.1737 119.563 59.4819 117.425 59.9661H117.348V59.9771ZM137.184 59.2178C135.266 59.0857 132.985 58.9426 130.572 58.8986C130.34 58.8986 130.164 58.7115 130.164 58.4804C130.164 58.2603 130.351 58.0732 130.572 58.0732H130.583C133.018 58.1283 135.322 58.2603 137.195 58.3924C137.415 58.4034 137.592 58.5905 137.581 58.8216C137.603 59.0417 137.459 59.2288 137.261 59.2728L137.184 59.2178Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M93.4014 152.969C93.17 152.969 92.9937 152.793 92.9827 152.562C92.9827 152.331 93.159 152.154 93.3904 152.143C95.5834 152.11 97.7653 151.901 99.9253 151.505C100.146 151.461 100.366 151.615 100.41 151.835C100.454 152.055 100.311 152.276 100.091 152.32H100.08C97.8755 152.727 95.6385 152.947 93.4014 152.969ZM86.7894 152.617C84.5634 152.375 82.3594 152.011 80.1774 151.516C79.957 151.472 79.8138 151.241 79.8578 151.021C79.9129 150.801 80.1333 150.669 80.3537 150.713C82.5026 151.197 84.6736 151.56 86.8555 151.813C87.087 151.846 87.2412 152.066 87.1972 152.298C87.1641 152.474 87.0319 152.617 86.8555 152.639L86.7894 152.617ZM106.372 150.416C106.207 150.416 106.063 150.317 105.997 150.174C105.898 149.975 105.997 149.722 106.185 149.634H106.207C108.212 148.765 110.064 147.598 111.717 146.179C111.904 146.036 112.168 146.069 112.301 146.256C112.433 146.421 112.411 146.652 112.268 146.806C110.549 148.281 108.62 149.48 106.548 150.383C106.482 150.416 106.416 150.438 106.35 150.438L106.372 150.416ZM73.874 149.667C73.874 149.667 73.7858 149.667 73.7417 149.667C71.6479 148.974 69.5431 148.16 67.5044 147.268C67.3061 147.158 67.2289 146.894 67.3501 146.696C67.4493 146.52 67.6587 146.443 67.846 146.509C69.8517 147.389 71.9234 148.193 74.0062 148.886C74.2156 148.963 74.3368 149.194 74.2597 149.414C74.1936 149.568 74.0393 149.667 73.874 149.667ZM61.752 144.319C61.6859 144.341 61.6197 144.341 61.5536 144.319C59.581 143.218 57.6636 142.03 55.8783 140.786C55.691 140.654 55.6469 140.401 55.7791 140.214C55.9114 140.027 56.1648 139.983 56.3522 140.115C58.1154 141.337 59.9998 142.514 61.9614 143.604C62.1597 143.714 62.2258 143.956 62.1156 144.154C62.0165 144.308 61.8512 144.385 61.6748 144.352L61.752 144.319ZM116.235 141.799C116.169 141.821 116.103 141.821 116.037 141.799C115.838 141.689 115.772 141.447 115.882 141.249C116.224 140.643 116.543 140.027 116.83 139.389C117.447 138.046 117.921 136.637 118.263 135.196C118.318 134.976 118.549 134.844 118.769 134.888C118.99 134.943 119.122 135.174 119.067 135.394C118.703 136.88 118.207 138.332 117.579 139.73C117.282 140.39 116.951 141.039 116.599 141.656C116.499 141.799 116.323 141.865 116.158 141.832L116.235 141.799ZM50.8863 136.715C50.7871 136.715 50.6989 136.682 50.6218 136.615C48.9467 135.13 47.3709 133.534 45.9162 131.839C45.762 131.674 45.762 131.421 45.9162 131.256C46.0705 131.102 46.335 131.102 46.4893 131.256C47.9219 132.918 49.4647 134.481 51.1067 135.933C51.2609 136.098 51.2609 136.351 51.1067 136.516C51.0516 136.637 50.9414 136.726 50.8091 136.748L50.8863 136.715ZM119.409 129.077C119.188 129.077 119.001 128.89 119.001 128.67C118.99 126.469 118.78 124.29 118.395 122.133C118.351 121.913 118.505 121.693 118.725 121.649C118.957 121.616 119.166 121.77 119.21 121.99C119.607 124.191 119.816 126.425 119.827 128.659C119.827 128.89 119.64 129.077 119.409 129.077ZM117.205 116.025C117.017 116.025 116.863 115.904 116.808 115.728C116.246 113.802 115.552 111.755 114.703 109.466C114.615 109.257 114.714 109.015 114.923 108.938H114.946C115.155 108.85 115.397 108.96 115.474 109.169C116.334 111.48 117.028 113.571 117.601 115.486C117.667 115.706 117.546 115.937 117.326 116.003L117.205 116.025ZM112.642 103.535C112.488 103.535 112.345 103.447 112.279 103.304C111.573 101.543 110.615 99.5178 109.612 97.3719V97.2618C109.546 97.0417 109.667 96.8106 109.898 96.7446C110.075 96.6896 110.262 96.7556 110.361 96.9097V97.0197C111.375 99.2207 112.323 101.213 113.028 102.94C113.116 103.16 113.028 103.403 112.808 103.502L112.642 103.535ZM107.132 91.4292C106.967 91.4292 106.813 91.3412 106.747 91.1871C105.755 88.8871 104.961 86.8512 104.333 84.9693C104.256 84.7492 104.377 84.5181 104.587 84.4411C104.807 84.364 105.039 84.4851 105.116 84.7052C105.733 86.565 106.515 88.5789 107.507 90.8569C107.595 91.066 107.507 91.3082 107.298 91.3962C107.298 91.3962 107.221 91.4732 107.165 91.4842L107.143 91.4292H107.132ZM103.099 78.8176C102.901 78.8176 102.724 78.6635 102.691 78.4654C102.504 77.2879 102.405 76.0993 102.405 74.8998C102.405 73.8323 102.493 72.7648 102.691 71.7194C102.757 71.4993 103 71.3782 103.22 71.4552C103.408 71.5103 103.529 71.6974 103.507 71.8844C103.319 72.8749 103.22 73.8873 103.231 74.8998C103.231 76.0553 103.33 77.1998 103.507 78.3443C103.529 78.5644 103.386 78.7735 103.165 78.8176H103.099ZM105.975 66.3159C105.876 66.3159 105.788 66.2829 105.711 66.2279C105.556 66.0628 105.556 65.8097 105.711 65.6446C107.187 63.9169 108.995 62.4972 111.011 61.4518C111.21 61.3417 111.463 61.4187 111.573 61.6168C111.673 61.8259 111.595 62.068 111.397 62.1781C109.469 63.1685 107.76 64.5331 106.35 66.1729C106.273 66.2939 106.141 66.371 105.997 66.371L105.975 66.3159ZM150.408 60.9235H150.32C148.204 60.4833 146.011 60.1092 143.796 59.823C143.575 59.79 143.41 59.5919 143.443 59.3718C143.476 59.1407 143.675 58.9867 143.895 59.0087C146.099 59.2948 148.303 59.669 150.507 60.1092C150.727 60.1642 150.871 60.3843 150.827 60.6154C150.783 60.8025 150.628 60.9345 150.43 60.9345H150.397L150.408 60.9235ZM117.348 59.9771C117.127 59.9991 116.918 59.834 116.896 59.6139C116.874 59.3938 117.039 59.1847 117.26 59.1627C119.431 58.6785 121.646 58.3594 123.872 58.2053C124.103 58.1943 124.29 58.3594 124.313 58.5905C124.335 58.8106 124.169 59.0087 123.938 59.0307H123.927C121.734 59.1737 119.563 59.4819 117.425 59.9661H117.348V59.9771ZM137.184 59.2178C135.266 59.0857 132.985 58.9426 130.572 58.8986C130.34 58.8986 130.164 58.7115 130.164 58.4804C130.164 58.2603 130.351 58.0732 130.572 58.0732H130.583C133.018 58.1283 135.322 58.2603 137.195 58.3924C137.415 58.4034 137.592 58.5905 137.581 58.8216C137.603 59.0417 137.459 59.2288 137.261 59.2728L137.184 59.2178Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M42.3128 126.557C42.1585 126.557 42.0263 126.48 41.9492 126.348C41.3871 125.379 40.8912 124.378 40.4615 123.354C40.3733 123.145 40.4615 122.903 40.6708 122.815C40.8802 122.727 41.1227 122.815 41.2108 123.035C41.6406 124.026 42.1145 125.005 42.6544 125.94C42.7757 126.127 42.7316 126.37 42.5442 126.491C42.4671 126.535 42.39 126.568 42.3018 126.557H42.3128Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M42.3128 126.557C42.1585 126.557 42.0263 126.48 41.9492 126.348C41.3871 125.379 40.8912 124.378 40.4615 123.354C40.3733 123.145 40.4615 122.903 40.6708 122.815C40.8802 122.727 41.1227 122.815 41.2108 123.035C41.6406 124.026 42.1145 125.005 42.6544 125.94C42.7757 126.127 42.7316 126.37 42.5442 126.491C42.4671 126.535 42.39 126.568 42.3018 126.557H42.3128Z"
                                                fill="#FB5607" />
                                            <path d="M176.151 213.54H134.319V222.102H176.151V213.54Z" fill="white" />
                                            <path opacity="0.1" d="M176.151 213.54H134.319V222.102H176.151V213.54Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M151.94 213.54H134.319V222.102H151.94V213.54Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M134.319 214.772H171.555L134.319 215.829V214.772Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M176.151 216.258L143.873 217.062H176.151V216.258Z"
                                                fill="black" />
                                            <path opacity="0.1"
                                                d="M136.027 218.657L151.94 218.008L175.335 218.657L151.94 219.02L136.027 218.657Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M134.319 220.473H161.891L134.319 221.122V220.473Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M176.085 221.123L157.67 221.464H176.151L176.085 221.123Z"
                                                fill="black" />
                                            <path d="M170.332 204.978H128.5V213.54H170.332V204.978Z" fill="white" />
                                            <path opacity="0.1" d="M170.332 204.978H128.5V213.54H170.332V204.978Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M146.121 204.978H128.5V213.54H146.121V204.978Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M128.5 206.21H165.737L128.5 207.256V206.21Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M170.332 207.696L138.055 208.5H170.332V207.696Z"
                                                fill="black" />
                                            <path opacity="0.1"
                                                d="M130.197 210.095L146.11 209.435L169.506 210.095L146.11 210.459L130.197 210.095Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M128.5 211.9H156.072L128.5 212.561V211.9Z"
                                                fill="black" />
                                            <path opacity="0.1"
                                                d="M170.266 212.561L151.852 212.902H170.332L170.266 212.561Z"
                                                fill="black" />
                                            <path d="M175.104 196.405H133.272V204.967H175.104V196.405Z" fill="white" />
                                            <path opacity="0.1" d="M175.104 196.405H133.272V204.967H175.104V196.405Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M150.893 196.405H133.272V204.967H150.893V196.405Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M133.272 197.638H170.509L133.272 198.694V197.638Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M175.104 199.124L142.826 199.927H175.104V199.124Z"
                                                fill="black" />
                                            <path opacity="0.1"
                                                d="M134.98 201.522L150.893 200.873L174.288 201.522L150.893 201.885L134.98 201.522Z"
                                                fill="black" />
                                            <path opacity="0.1" d="M133.272 203.338H160.844L133.272 203.988V203.338Z"
                                                fill="black" />
                                            <path opacity="0.1"
                                                d="M175.049 203.988L156.634 204.329H175.104L175.049 203.988Z"
                                                fill="black" />
                                            <path
                                                d="M202.973 221.926L204.053 217.821H248.75L269.325 219.879L270.107 221.926H202.973Z"
                                                fill="#263238" />
                                            <path opacity="0.4" d="M248.75 217.821V221.926H202.973L204.053 217.821H248.75Z"
                                                fill="black" />
                                            <path
                                                d="M239.769 198.177C240.001 200.103 238.623 201.853 236.695 202.084C236.54 202.106 236.375 202.106 236.221 202.106H167.764C165.549 202.062 163.72 200.378 163.478 198.177L159.411 154.41C159.367 153.981 159.4 153.552 159.499 153.134C159.885 151.549 161.329 150.449 162.96 150.482H231.46C233.675 150.526 235.504 152.209 235.747 154.41L239.769 198.177Z"
                                                fill="#263238" />
                                            <path opacity="0.4"
                                                d="M235.978 202.106H167.764C165.549 202.062 163.72 200.378 163.478 198.177L159.411 154.41C159.367 153.981 159.4 153.552 159.499 153.134H227.713C229.928 153.178 231.758 154.862 232 157.063L236.066 200.829C236.11 201.258 236.077 201.688 235.978 202.106Z"
                                                fill="black" />
                                            <path
                                                d="M188.945 175.265H203.106L199.337 215.752L221.729 219.108V221.926H174.564V219.108L184.228 215.752L188.945 175.265Z"
                                                fill="#263238" />
                                            <path opacity="0.1"
                                                d="M203.106 175.265L192.614 221.287L184.228 221.034L188.945 175.265H203.106Z"
                                                fill="white" />
                                            <path d="M203.04 398.456H196.295L184.162 229.805H193.122L203.04 398.456Z"
                                                fill="#263238" />
                                            <path opacity="0.4"
                                                d="M203.051 398.456H196.295L184.757 238.191L184.162 230.081H193.122L193.606 238.191L203.051 398.456Z"
                                                fill="white" />
                                            <path opacity="0.2"
                                                d="M193.606 237.784H184.757L184.162 230.081H193.122L193.606 237.784Z"
                                                fill="black" />
                                            <path d="M252.585 398.456H245.841L244.739 229.805H253.687L252.585 398.456Z"
                                                fill="#263238" />
                                            <path opacity="0.5"
                                                d="M253.699 230.081L253.522 257.296L252.597 398.456H245.841L244.916 257.296L244.739 230.081H253.699Z"
                                                fill="white" />
                                            <path opacity="0.2"
                                                d="M253.699 230.081L253.522 257.593H244.916L244.739 230.081H253.699Z"
                                                fill="black" />
                                            <path d="M324.26 398.456H317.515L305.382 229.805H314.342L324.26 398.456Z"
                                                fill="#263238" />
                                            <path opacity="0.5"
                                                d="M324.271 398.456H317.515L305.977 238.191L305.382 230.081H314.342L314.826 238.191L324.271 398.456Z"
                                                fill="white" />
                                            <path opacity="0.2"
                                                d="M314.826 237.784H305.977L305.382 230.081H314.342L314.826 237.784Z"
                                                fill="black" />
                                            <path d="M125.811 398.456H119.067L128.985 229.805H137.944L125.811 398.456Z"
                                                fill="#263238" />
                                            <path opacity="0.5"
                                                d="M137.944 230.081L137.349 238.191L125.811 398.456H119.067L128.5 238.191L128.985 230.081H137.944Z"
                                                fill="white" />
                                            <path opacity="0.2"
                                                d="M128.985 230.081H137.944L137.349 237.784H128.5L128.985 230.081Z"
                                                fill="black" />
                                            <path
                                                d="M121.888 225.602H321.438V231.665C321.438 232.975 320.369 234.042 319.058 234.042H124.268C122.957 234.042 121.888 232.975 121.888 231.665V225.602Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M121.888 225.602H321.438V231.665C321.438 232.975 320.369 234.042 319.058 234.042H124.268C122.957 234.042 121.888 232.975 121.888 231.665V225.602Z"
                                                fill="#FB5607" />
                                            <path opacity="0.6"
                                                d="M121.888 225.602H321.438V231.665C321.438 232.975 320.369 234.042 319.058 234.042H124.268C122.957 234.042 121.888 232.975 121.888 231.665V225.602Z"
                                                fill="white" />
                                            <path opacity="0.2" d="M321.438 225.59H121.888V229.816H321.438V225.59Z"
                                                fill="black" />
                                            <path
                                                d="M325.626 226.702H117.701C116.389 226.702 115.32 225.634 115.32 224.325C115.32 223.015 116.389 221.948 117.701 221.937H325.626C326.937 221.937 328.006 223.015 328.006 224.325C328.006 225.634 326.937 226.702 325.626 226.702Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M325.626 226.702H117.701C116.389 226.702 115.32 225.634 115.32 224.325C115.32 223.015 116.389 221.948 117.701 221.937H325.626C326.937 221.937 328.006 223.015 328.006 224.325C328.006 225.634 326.937 226.702 325.626 226.702Z"
                                                fill="#FB5607" />
                                            <path opacity="0.6"
                                                d="M325.626 226.702H117.701C116.389 226.702 115.32 225.634 115.32 224.325C115.32 223.015 116.389 221.948 117.701 221.937H325.626C326.937 221.937 328.006 223.015 328.006 224.325C328.006 225.634 326.937 226.702 325.626 226.702Z"
                                                fill="white" />
                                            <path
                                                d="M276.433 214.597L278.989 210.767C279.496 210.008 280.356 209.545 281.281 209.545H284.521C284.786 209.545 285.061 209.589 285.315 209.666L296.875 213.166C297.536 213.364 298.087 213.793 298.44 214.388L300.104 217.172L276.433 214.597Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M276.433 214.597L278.989 210.767C279.496 210.008 280.356 209.545 281.281 209.545H284.521C284.786 209.545 285.061 209.589 285.315 209.666L296.875 213.166C297.536 213.364 298.087 213.793 298.44 214.388L300.104 217.172L276.433 214.597Z"
                                                fill="#FB5607" />
                                            <path opacity="0.2"
                                                d="M300.104 217.172L283.254 215.345L276.411 214.597L278.967 210.767C279.474 210.008 280.334 209.545 281.259 209.545H284.499C284.775 209.545 285.039 209.589 285.304 209.666L285.557 209.743L296.853 213.166C297.514 213.364 298.076 213.793 298.429 214.388L300.104 217.172Z"
                                                fill="black" />
                                            <path opacity="0.2"
                                                d="M300.104 217.171L283.254 215.345L285.557 209.743L296.853 213.166C297.514 213.364 298.076 213.793 298.429 214.387L300.104 217.171Z"
                                                fill="black" />
                                            <path
                                                d="M308.104 221.563V221.926H272.377L273.7 216.764C274.207 214.817 275.97 213.452 277.987 213.463H293.833C294.362 213.463 294.88 213.551 295.376 213.738L297.36 214.475L305.228 217.403C306.969 218.052 308.115 219.714 308.104 221.563Z"
                                                fill="#FB5607" />
                                            <path
                                                d="M308.104 221.563V221.926H272.377L273.7 216.764C274.207 214.817 275.97 213.452 277.987 213.463H293.833C294.362 213.463 294.88 213.551 295.376 213.738L297.36 214.475L305.228 217.403C306.969 218.052 308.115 219.714 308.104 221.563Z"
                                                fill="#FB5607" />
                                            <path opacity="0.2"
                                                d="M308.104 221.562V221.926H293.437L294.219 216.346C294.406 215.069 295.596 214.178 296.875 214.365C297.04 214.387 297.194 214.431 297.36 214.486L305.228 217.414C306.969 218.052 308.115 219.714 308.104 221.562Z"
                                                fill="black" />
                                            <path
                                                d="M295.718 218.14L300.39 204.153C300.567 203.614 301.14 203.317 301.68 203.493C301.735 203.515 301.79 203.537 301.845 203.559C302.264 203.801 302.473 204.274 302.374 204.747L298.44 219.67C298.44 219.67 295.828 220.726 295.718 218.14Z"
                                                fill="#263238" />
                                            <path opacity="0.2"
                                                d="M276.433 220.77H274.361L274.758 218.734H276.829L276.433 220.77Z"
                                                fill="black" />
                                            <path opacity="0.2"
                                                d="M279.518 220.693H277.447L277.843 218.657H279.915L279.518 220.693Z"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3_5982">
                                                <rect width="551" height="410" fill="white" transform="translate(-22)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Contact Section ======= -->

@endsection
@push('script_2')
@if ($errors->any())
<script>
    @foreach ($errors->all() as $error)
        toastr.error('{{ translate($error) }}', Error, {
            CloseButton: true,
            ProgressBar: true
        });
    @endforeach
</script>
@endif
<script>
    $(document).on('click','.reloadCaptcha', function(){
        $.ajax({
            url: "{{ route('reload-captcha') }}",
            type: "GET",
            dataType: 'json',
            beforeSend: function () {
                $('#loading').show()
                $('.capcha-spin').addClass('active')
            },
            success: function(data) {
                $('#reload-captcha').html(data.view);
            },
            complete: function () {
                $('#loading').hide()
                $('.capcha-spin').removeClass('active')
            }
        });
    });
</script>

@if(isset($recaptcha) && $recaptcha['status'] == 1)
    <script src="https://www.google.com/recaptcha/api.js?render={{$recaptcha['site_key']}}"></script>
@endif
@if(isset($recaptcha) && $recaptcha['status'] == 1)
    <script>
        $(document).ready(function() {
            $('#signInBtn').click(function (e) {
                if( $('#set_default_captcha_value').val() == 1){
                    $('#contact-form-id').submit();
                    return true;
                }
                e.preventDefault();
                if (typeof grecaptcha === 'undefined') {
                    toastr.error('Invalid recaptcha key provided. Please check the recaptcha configuration.');
                    $('#reload-captcha').removeClass('d-none');
                    $('#set_default_captcha_value').val('1');

                    return;
                }
                grecaptcha.ready(function () {
                    grecaptcha.execute('{{$recaptcha['site_key']}}', {action: 'submit'}).then(function (token) {
                        $('#g-recaptcha-response').value = token;
                        $('#contact-form-id').submit();
                    });
                });
                window.onerror = function (message) {
                    var errorMessage = 'An unexpected error occurred. Please check the recaptcha configuration';
                    if (message.includes('Invalid site key')) {
                        errorMessage = 'Invalid site key provided. Please check the recaptcha configuration.';
                    } else if (message.includes('not loaded in api.js')) {
                        errorMessage = 'reCAPTCHA API could not be loaded. Please check the recaptcha API configuration.';
                    }
                    $('#reload-captcha').removeClass('d-none');
                    $('#set_default_captcha_value').val('1');
                    toastr.error(errorMessage)
                    return true;
                };
            });
        });
    </script>
@endif
{{-- recaptcha scripts end --}}
@endpush
