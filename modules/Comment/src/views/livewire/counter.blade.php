<form wire:submit.prevent="increment">
    @csrf
    <h1>{{ $counter }}</h1>
    <button type="submit" class="btn btn-success">+</button>
</form>
