@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="mb-3">
    {!! html()->label('Name', 'name')->class('form-label') !!}
    {!! html()->text('name')->class('form-control')->value($user->name)->placeholder('Enter your name') !!}
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<div class="mb-3">
    {!! html()->label('Email', 'email')->class('form-label') !!}
    {!! html()->email('email')->class('form-control')->value($user->email)->placeholder('Enter your email') !!}
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<div class="mb-3">
    {!! html()->label('User Type', 'user_type')->class('form-label') !!}
    {!! html()->select('user_type', $userTypes, old('user_type', $user->user_type ?? null))
        ->class('form-control' . ($errors->has('user_type') ? ' is-invalid' : ''))
        ->placeholder('Select User Type') !!}
         @error('user_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
     @enderror
</div>

<div class="mb-3">
    {!! html()->submit('Submit')->class('btn btn-primary') !!}
</div>
