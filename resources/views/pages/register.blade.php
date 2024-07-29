<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register.originador') }}">
            @csrf
            <div class="text-center mb-4">
                <h4 class="mb-1">Cadastro</h4>
                <p>Crie uma conta para continuar.</p>
            </div>
            <div>
                <x-label for="name" value="{{ __('Nome completo') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
            </div>
            <br>
            <div>
                <x-label for="cpf" value="{{ __('CPF') }}" />
                <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required autocomplete="cpf" />
            </div>
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
            <div>
                <x-label for="phone" value="{{ __('Telefone') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Crie uma senha') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirme a sua senha') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar meu login') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button class="ml-4">
                    {{ __('Crie uma conta') }}
                </x-button>
            </div>

            <div class="flex items-center justify-center mt-4">       
                Já possui conta? 
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

@section('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Inputmask JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function() {
            alert('Script carregado!'); // Verificar se o script está sendo carregado

            try {
                var cpfElement = $('#cpf');
                var phoneElement = $('#phone');

                if (cpfElement.length > 0) {
                    cpfElement.inputmask('999.999.999-99');
                    console.log('Máscara CPF aplicada');
                } else {
                    console.log('Elemento CPF não encontrado');
                }

                if (phoneElement.length > 0) {
                    phoneElement.inputmask('(99) 99999-9999');
                    console.log('Máscara telefone aplicada');
                } else {
                    console.log('Elemento telefone não encontrado');
                }
            } catch (e) {
                console.error('Erro ao aplicar máscara:', e);
            }
        });
    </script>
@endsection
