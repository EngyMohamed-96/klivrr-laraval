@if (!\Schema::hasTable((new \App\User)->getTable()))
    <div class="alert alert-danger fade show" role="alert">
        {{ trans('dashboard.You did not run the migrations and seeders! The login information will not be available!') }}
    </div>
@endif
