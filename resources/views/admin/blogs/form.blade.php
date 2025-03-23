@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="mb-3">
    {!! html()->label('Title', 'title')->class('form-label') !!}
    {!! html()->text('title', old('title'))->value($blog->title ?? '')->class('form-control' . ($errors->has('title') ? ' is-invalid' : '')) !!}
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    {!! html()->label('Content', 'content')->class('form-label') !!}
    {!! html()->textarea('content', old('content'))->value($blog->content ?? '')->class('form-control' . ($errors->has('content') ? ' is-invalid' : '')) !!}
    @error('content')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    {!! html()->submit('Submit')->class('btn btn-primary') !!}
</div>
