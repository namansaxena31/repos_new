<div class="g-recaptcha" data-sitekey="{{ config('captcha.sitekey') }}"></div>
@if ($errors->has('g-recaptcha-response'))
    <span class="text-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </span>
@endif
@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush