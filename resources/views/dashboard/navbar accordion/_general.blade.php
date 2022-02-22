<div class="row">
    <div class="col-md-12">
        <form id="form-product" method="POST" action="{{ route('admin.config.update') }}" autocomplete="off"
                class="form-horizontal"
                enctype="multipart/form-data">
            @csrf
            <div class="card ">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{ __('Configurações gerais') }}</h4>
                    <p class="card-category"></p>
                </div>
                <div class="card-body ">
                    @if (isset($success) || isset($error))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-{{(isset($success) ? 'success' : 'danger')}}">
                                    <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{(isset($success) ? $success : $error)}}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        {{-- CEP --}}
                        <label class="col-sm-2 col-form-label">{{ __('Cep') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control cep"
                                        name="settings[address.cep]" id="cep" type="text"
                                        placeholder="{{ __('Cep') }}" value="{{ isset($settings['address.cep']['value']) ? $settings['address.cep']['value'] : ''}}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Rua --}}
                        <label class="col-sm-2 col-form-label">{{ __('Rua') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control"
                                        name="settings[address.rua]" id="endereco" type="text"
                                        placeholder="{{ __('Rua') }}" value="{{ isset($settings['address.rua']['value']) ? $settings['address.rua']['value'] : ''}}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Bairro --}}
                        <label class="col-sm-2 col-form-label">{{ __('Bairro') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control"
                                        name="settings[address.bairro]" id="bairro" type="text"
                                        placeholder="{{ __('Bairro') }}" value="{{isset($settings['address.bairro']['value']) ? $settings['address.bairro']['value'] : ''}}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Complemento --}}
                        <label class="col-sm-2 col-form-label">{{ __('Complemento') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control"
                                        name="settings[address.complemento]" id="complemento" type="text"
                                        placeholder="{{ __('Complemento') }}" value="{{ isset($settings['address.complemento']['value']) ? $settings['address.complemento']['value'] : '' }}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- E-mail - Duvidas --}}
                        <label class="col-sm-2 col-form-label">{{ __('E-mail') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control"
                                        name="settings[email.company]" id="email" type="email"
                                        placeholder="{{ __('E-mail') }}" value="{{ isset($settings['email.company']['value']) ? $settings['email.company']['value'] : '' }}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Telefone --}}
                        <label class="col-sm-2 col-form-label">{{ __('Telefone') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control phone"
                                        name="settings[phone]" id="phone" type="text"
                                        placeholder="{{ __('Telefone') }}" value="{{ isset($settings['phone']['value']) ? $settings['phone']['value'] : '' }}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Whatsapp --}}
                        <label class="col-sm-2 col-form-label">{{ __('Whatsapp') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control phone"
                                        name="settings[phone.whatsapp]" id="phone" type="text"
                                        placeholder="{{ __('Whatsapp') }}" value="{{ isset($settings['phone.whatsapp']['value']) ? $settings['phone.whatsapp']['value'] : '' }}"
                                        aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Parcelas --}}
                        <label class="col-sm-2 col-form-label">{{ __('Parcelas assumidas') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control"
                                        name="settings[installments]" id="parcelas" type="text"
                                        placeholder="{{ __('Parcelas assumidas') }}" value="{{ isset($settings['installments']['value']) ? $settings['installments']['value'] : '' }}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">{{ __('Atualizar') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>