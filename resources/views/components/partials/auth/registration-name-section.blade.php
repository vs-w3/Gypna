<div class="w-full" x-data="{ profile_type: 'PersonProfile' }">
            

    <x-partials.form.auth-input-select name="user_type" />
    <div x-show="profile_type == 'PersonProfile'">
        <x-partials.form.auth-input-text name="person_name" type="text" placeholder="Name" /> 
        <x-partials.form.auth-input-text name="person_lastname" type="text" placeholder="Last Name" /> 
        
    </div>
    <div x-show="profile_type == 'CompanyProfile'">
        <x-partials.form.auth-input-text name="company_name" type="text" placeholder="Comapny Name" />
        
    </div>
    
</div>