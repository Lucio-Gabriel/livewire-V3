<div>
    <ul>
        @foreach($this->users as $users)
            <li> {{  $users->name  }} | {{ $users->email }}</li>
        @endforeach
    </ul>

    {{ $this->users->links() }}
</div>
