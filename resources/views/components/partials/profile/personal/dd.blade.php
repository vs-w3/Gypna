<li class="py-2 px-5">
    <a href="{{ url(app()->getlocale() . '/' . 'member/' . auth()->user()->id) }}">
        <i class="far fa-address-card"></i><span class="ml-5">Profile</span>
    </a>
</li>
<!-- Admin -->
<li class="py-2 px-5">
    <a href="admin">
        <i class="fas fa-user-cog"></i><span class="ml-5">Admin</span>
    </a>
</li>