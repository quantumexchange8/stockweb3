<div class="footer" style="margin-top: 40px !important;">
    <div class="container">
        <div class="sixteen columns">
            <a href="{{ route('web.home') }}"><img
                    src="{{ asset('images/logo-new/fulllogo_transparent_nobuffer.png') }}" alt="" /></a>
        </div>
        <div class="sixteen columns warning">
            <p class="text-bold">
                Important Information
            </p>
            <p>
                All investing is subject to risk including the possible loss of the money you invest.
            </p>
            <p>
                *{{ $fullCompName }} is owned by its funds, which are owned by {{ $fullCompName }}'s fund shareholder clients.
            </p>
        </div>
        <div class="sixteen columns copyright">
            <p>© {{ $fullCompName }} 2023</p>
        </div>
    </div>
</div>
