@extends('app')

@section('content')
    <div class="container my-10 px-6 mx-auto">
        <section class="mb-10 text-gray-800">
            <div class="container text-gray-800 px-4 md:px-12">
                <div class="block rounded-lg shadow-lg py-10 md:py-12 px-4 md:px-6 bg-gray-50 border-2" style="margin-top: 50px;">
                    <h1 class="mb-10 pb-3 text-center text-xl text font-bold">Contact me via:</h1>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-6">
                        <div class="mb-6 lg:mb-0 text-center mx-auto">
                            <a href="#" title="Email">
                                <svg class="w-8 h-8 text-black mb-6 mx-auto" width="32" height="32" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M44 24V9H24H4V24V39H24" stroke="#333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/><path d="M44 34L30 34" stroke="#333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/><path d="M39 29L44 34L39 39" stroke="#333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 9L24 24L44 9" stroke="#333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                        <div class="mb-6 md:mb-0 text-center mx-auto">
                            <a href="https://t.me/azatelegram" target="_blank" title="Telegram">
                                <svg class="w-8 h-8 text-blue-400 mb-6 mx-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16"> <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/> </svg>
                            </a>
                        </div>
                        <div class="mb-6 text-center mx-auto">
                            <a href="https://wa.me/996700754765?text=Hello!" target="_blank" title="WhatsApp">
                                <svg class="w-8 h-8 text-green-600 mb-6 mx-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/> </svg>
                            </a>
                        </div>
                        <div class="mb-6 lg:mb-0 text-center mx-auto">
                            <a href="#" title="Linkedin">
                                <svg class="w-8 h-8 mb-6 mx-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16"> <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/> </svg>
                            </a>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>  
    </div>
@endsection