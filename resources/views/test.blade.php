<section class="p-4 bg-gray-100 rounded-lg shadow-lg text-center">
    @if(is_array($value))
        <p class="text-xl font-semibold text-blue-600">User List:</p>
        <ul class="list-none p-0">
            @foreach($value as $user)
                <li class="text-lg text-blue-600">
                    {{ $user['name'] }} - {{ $user['email'] }} - {{ $user['gender'] }}
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-xl font-semibold text-blue-600">{{ $value }}</p>
    @endif
</section>
