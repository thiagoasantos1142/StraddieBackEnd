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

        <form method="POST" action="{{ route('register.organization') }}">
            @csrf
            <div class="text-center mb-4">
                <h4 class="mb-1">Cadastro de Empresa</h4>
                <p>Primeiro informe os seus dados pessoais.</p>
            </div>

            <!-- User Information -->
            <div>
                <x-label for="name" value="{{ __('Nome completo') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
            </div>
            <br>
            <div>
                <x-label for="cpf" value="{{ __('CPF') }}" />
                <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required autocomplete="cpf" />
            </div>
            <br>
            <div>
                <x-label for="email" value="{{ __('Seu E-mail corporativo') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
            <br>
            <div>
                <x-label for="phone" value="{{ __('Informe o numero de Telefone') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
            </div>
            <br>
            <div class="mt-4">
                <x-label for="password" value="{{ __('Crie uma senha') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirme a sua senha') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <hr class="my-10">
            <div class="text-center mb-4">
                <h4 class="mb-1">Agora informe os dados da Empresa</h4>
                
            </div>

            <!-- Organization Information -->
            <div>
                <x-label for="nome_fantasia" value="{{ __('Nome Fantasia') }}" />
                <x-input id="nome_fantasia" class="block mt-1 w-full" type="text" name="nome_fantasia" :value="old('nome_fantasia')" required />
            </div><br>
            <div>
                <x-label for="razao_social" value="{{ __('Razão social') }}" />
                <x-input id="razao_social" class="block mt-1 w-full" type="text" name="razao_social" :value="old('razao_social')" required />
            </div><br>
            <div>
                <x-label for="cnpj" value="{{ __('CNPJ') }}" />
                <x-input id="cnpj" class="block mt-1 w-full" type="text" name="cnpj" :value="old('cnpj')" required />
            </div><br>

            <div>
                <x-label for="organization_email" value="{{ __('Email de contato da empresa') }}" />
                <x-input id="organization_email" class="block mt-1 w-full" type="email" name="organization_email" :value="old('organization_email')" required />
            </div><br>
            <div>
                <x-label for="organization_phone" value="{{ __('Telefone de contato da empresa') }}" />
                <x-input id="organization_phone" class="block mt-1 w-full" type="text" name="organization_phone" :value="old('organization_phone')" required />
            </div><br>
           
            <div class="flex items-center justify-center mt-4">
                <x-button class="ml-4">
                    {{ __('Cadastrar Empresa') }}
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
            $('#cpf').inputmask('999.999.999-99');
            $('#phone').inputmask('(99) 99999-9999');
            $('#cnpj').inputmask('99.999.999/9999-99');
            $('#organization_phone').inputmask('(99) 99999-9999');
        });
    </script>
@endsection
