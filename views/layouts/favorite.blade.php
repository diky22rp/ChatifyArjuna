<div class="favorite-list-item">
    <div data-id="{{ $user->IndexEmployee }}" data-action="0" class="avatar av-m" 
        style="background-image: url('{{ asset('/images/user_picture/'.$user->Gender.'.png') }}');">
    </div>
    <p>{{ strlen($user->EmployeeName) > 5 ? substr($user->EmployeeName,0,6).'..' : $user->EmployeeName }}</p>
</div>