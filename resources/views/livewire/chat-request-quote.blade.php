<div class="min-h-screen flex flex-col relative">
    <!-- Header -->
    <div class="flex items-center space-x-4 p-4 border-b border-b-background-primary-dark bg-white fixed top-0 left-0 w-full z-10">
        <img class="w-18 rounded-full" src="{{ asset('assets/images/avatar_marly.png') }}" alt="Avatar Marly">
        <div>
            <h2 class="text-lg font-semibold">Marly - Bot</h2>
            <p class="text-sm text-gray-500">Atendente Virtual</p>
        </div>
    </div>

    <!-- Chat messages -->
    <div class="flex-1 overflow-y-auto overflow-clip p-4 my-32 space-y-4" wire:poll>
        @foreach ($messages as $message)
            <div class="animate__animated animate__fadeInUp flex {{ $message['from'] === 'user' ? 'justify-end' : 'justify-start' }}">
                @if ($message['from'] === 'bot')
                    <img class="w-12 h-12 rounded-full mr-2" src="{{ asset('assets/images/avatar_marly.png') }}" alt="Bot Avatar">
                @endif
                <div class="text-wrap max-w-md p-3 rounded-2xl {{ $message['from'] === 'user' ? 'bg-blue-500 text-white rounded-br-none' : 'bg-white text-gray-800 rounded-bl-none' }}">
                    {{ $message['text'] }}
                </div>
            </div>
        @endforeach
        <div id="scroll-bottom" class="mt-32"></div>
    </div>

    <!-- Message input -->
    <div class="flex items-center space-x-2 p-4 border-t border-t-background-primary-dark bg-white w-full fixed bottom-0 left-0 z-10">
        <input
            wire:model="newMessage"
            wire:keydown.enter="sendMessage"
            class="flex-1 p-2 focus:ring-0 focus:outline-0"
            type="text"
            placeholder="Digite sua mensagem..."
        >
        <button
            wire:click="sendMessage"
            class="text-white p-2 rounded-lg transition hover:cursor-pointer *:text-black *:hover:text-primary text-xl"
        >
            <i class="ph ph-paper-plane-tilt"></i>
        </button>
    </div>
</div>

@push('scripts')
<script>
    window.addEventListener('scroll-to-bottom', () => {
        const bottom = document.getElementById('scroll-bottom');
        if (bottom) {
            bottom.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>
@endpush
