@php
$custom_labels = json_decode(session('business.custom_labels'), true);
$user_custom_field1 = !empty($custom_labels['user']['custom_field_1']) ? $custom_labels['user']['custom_field_1'] : __('lang_v1.user_custom_field1');
$user_custom_field2 = !empty($custom_labels['user']['custom_field_2']) ? $custom_labels['user']['custom_field_2'] : __('lang_v1.user_custom_field2');
$user_custom_field3 = !empty($custom_labels['user']['custom_field_3']) ? $custom_labels['user']['custom_field_3'] : __('lang_v1.user_custom_field3');
$user_custom_field4 = !empty($custom_labels['user']['custom_field_4']) ? $custom_labels['user']['custom_field_4'] : __('lang_v1.user_custom_field4');
@endphp
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('user_dob', __( 'lang_v1.dob' ) . ':') !!}
        {!! Form::text('dob', !empty($user->dob) ? @format_date($user->dob) : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.dob'), 'readonly', 'id' => 'user_dob' ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('gender', __( 'lang_v1.gender' ) . ':') !!}
        {!! Form::select('gender', ['male' => __('lang_v1.male'), 'female' => __('lang_v1.female'), 'others' => __('lang_v1.others')], !empty($user->gender) ? $user->gender : null, ['class' => 'form-control', 'id' => 'gender', 'placeholder' => __( 'messages.please_select') ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('marital_status', __( 'lang_v1.marital_status' ) . ':') !!}
        {!! Form::select('marital_status', ['married' => __( 'lang_v1.married'), 'unmarried' => __( 'lang_v1.unmarried' ), 'divorced' => __( 'lang_v1.divorced' )], !empty($user->marital_status) ? $user->marital_status : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.marital_status') ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('blood_group', __( 'lang_v1.blood_group' ) . ':') !!}
        {!! Form::text('blood_group', !empty($user->blood_group) ? $user->blood_group : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.blood_group') ]); !!}
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('contact_number', __( 'lang_v1.mobile_number' ) . ':') !!}
        {!! Form::text('contact_number', !empty($user->contact_number) ? $user->contact_number : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.mobile_number') ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('alt_number', __( 'business.alternate_number' ) . ':') !!}
        {!! Form::text('alt_number', !empty($user->alt_number) ? $user->alt_number : null, ['class' => 'form-control', 'placeholder' => __( 'business.alternate_number') ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('family_number', __( 'lang_v1.family_contact_number' ) . ':') !!}
        {!! Form::text('family_number', !empty($user->family_number) ? $user->family_number : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.family_contact_number') ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('fb_link', __( 'lang_v1.fb_link' ) . ':') !!}
        {!! Form::text('fb_link', !empty($user->fb_link) ? $user->fb_link : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.fb_link') ]); !!}
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('twitter_link', __( 'lang_v1.twitter_link' ) . ':') !!}
        {!! Form::text('twitter_link', !empty($user->twitter_link) ? $user->twitter_link : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.twitter_link') ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('social_media_1', __( 'lang_v1.social_media', ['number' => 1] ) . ':') !!}
        {!! Form::text('social_media_1', !empty($user->social_media_1) ? $user->social_media_1 : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.social_media', ['number' => 1] ) ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('social_media_2', __( 'lang_v1.social_media', ['number' => 2] ) . ':') !!}
        {!! Form::text('social_media_2', !empty($user->social_media_2) ? $user->social_media_2 : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.social_media', ['number' => 2] ) ]); !!}
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('custom_field_1', $user_custom_field1 . ':') !!}
        {!! Form::text('custom_field_1', !empty($user->custom_field_1) ? $user->custom_field_1 : null, ['class' => 'form-control', 'placeholder' => $user_custom_field1 ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('custom_field_2', $user_custom_field2 . ':') !!}
        {!! Form::text('custom_field_2', !empty($user->custom_field_2) ? $user->custom_field_2 : null, ['class' => 'form-control', 'placeholder' => $user_custom_field2 ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('custom_field_3', $user_custom_field3 . ':') !!}
        {!! Form::text('custom_field_3', !empty($user->custom_field_3) ? $user->custom_field_3 : null, ['class' => 'form-control', 'placeholder' => $user_custom_field3 ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('custom_field_4', $user_custom_field4 . ':') !!}
        {!! Form::text('custom_field_4', !empty($user->custom_field_4) ? $user->custom_field_4 : null, ['class' => 'form-control', 'placeholder' => $user_custom_field4 ]); !!}
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('guardian_name', __( 'lang_v1.guardian_name') . ':') !!}
        {!! Form::text('guardian_name', !empty($user->guardian_name) ? $user->guardian_name : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.guardian_name' ) ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('id_proof_name', __( 'lang_v1.id_proof_name') . ':') !!}
        {!! Form::text('id_proof_name', !empty($user->id_proof_name) ? $user->id_proof_name : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.id_proof_name' ) ]); !!}
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('id_proof_number', __( 'lang_v1.id_proof_number') . ':') !!}
        {!! Form::text('id_proof_number', !empty($user->id_proof_number) ? $user->id_proof_number : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.id_proof_number' ) ]); !!}
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group col-md-6">
    {!! Form::label('permanent_address', __( 'lang_v1.permanent_address') . ':') !!}
    {!! Form::textarea('permanent_address', !empty($user->permanent_address) ? $user->permanent_address : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.permanent_address'), 'rows' => 3 ]); !!}
</div>
<div class="form-group col-md-6">
    {!! Form::label('current_address', __( 'lang_v1.current_address') . ':') !!}
    {!! Form::textarea('current_address', !empty($user->current_address) ? $user->current_address : null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.current_address'), 'rows' => 3 ]); !!}
</div>