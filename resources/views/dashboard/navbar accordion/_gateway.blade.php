<div class="row">
    <div class="col-md-12">
        <form id="form-product" method="POST" action="{{ route('admin.config.update') }}" autocomplete="off"
                class="form-horizontal"
                enctype="multipart/form-data">
            <div class="card ">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{ __('Configurações de gateway') }}</h4>
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
                    {{-- Production --}}
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <p class="lead">Dados para produção</p>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Email --}}
                        <label class="col-sm-2 col-form-label">{{ __('Email pagseguro') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control"
                                        name="settings[pagseguro.email]" id="pagseguro-email" type="text"
                                        placeholder="{{ __('Email pagseguro') }}" value="{{ isset($settings['pagseguro.email']['value']) ? $settings['pagseguro.email']['value'] : ''}}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Token Producao --}}
                        <label class="col-sm-2 col-form-label">{{ __('Token') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control"
                                        name="settings[pagseguro.token]" id="kmPrice" type="text"
                                        placeholder="{{ __('Token') }}" value="{{ isset($settings['pagseguro.token']['value']) ? $settings['pagseguro.token']['value'] : ''}}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Url do pagseguro producao --}}
                        <label class="col-sm-2 col-form-label">{{ __('URL pagseguro') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control"
                                        name="settings[pagseguro.url.production]" id="kmPrice" type="text"
                                        placeholder="{{ __('Token') }}" value="{{ isset($settings['pagseguro.url.production']['value']) ? $settings['pagseguro.url.production']['value'] : ''}}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- URL de notificacao --}}
                        <label class="col-sm-2 col-form-label">{{ __('URL de notificacao do Pagseguro') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control cep"
                                        name="settings[pagseguro.url.notification.production]" id="pagseguro-url-production" type="text"
                                        placeholder="{{ __('URL de notificacao') }}" value="{{ isset($settings['pagseguro.url.notification.production']['value']) ? $settings['pagseguro.url.notification.production']['value'] : ''}}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                        <hr />
                    </div>
                    <hr />
                    {{-- Sandbox --}}
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="lead">Dados para sandbox</p>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Email --}}
                        <label class="col-sm-2 col-form-label">{{ __('Email pagseguro') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control"
                                        name="settings[pagseguro.email.sandbox]" id="pagseguro-email" type="text"
                                        placeholder="{{ __('Email pagseguro') }}" value="{{ isset($settings['pagseguro.email.sandbox']['value']) ? $settings['pagseguro.email.sandbox']['value'] : ''}}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Token') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control cep"
                                        name="settings[pagseguro.token.sandbox]" id="pagseguro-token-sandbox" type="text"
                                        placeholder="{{ __('Token') }}" value="{{ isset($settings['pagseguro.token.sandbox']['value']) ? $settings['pagseguro.token.sandbox']['value'] : ''}}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    {{-- URL --}}
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('URL pagseguro') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control cep"
                                        name="settings[pagseguro.url.sandbox]" id="pagseguro-url-sandbox" type="text"
                                        placeholder="{{ __('URL') }}" value="{{ isset($settings['pagseguro.url.sandbox']['value']) ? $settings['pagseguro.url.sandbox']['value'] : ''}}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                    </div>
                    {{-- URL de notificacao --}}
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('URL de notificacao do Pagseguro') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control cep"
                                        name="settings[pagseguro.url.notification.sandbox]" id="pagseguro-url-sandbox" type="text"
                                        placeholder="{{ __('URL de notificacao') }}" value="{{ isset($settings['pagseguro.url.notification.sandbox']['value']) ? $settings['pagseguro.url.notification.sandbox']['value'] : ''}}"
                                        required="true" aria-required="true"/>
                            </div>
                        </div>
                        <hr />
                    </div>
                    {{-- Modo --}}
                    <hr />
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="lead">Modo</p>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Modo') }}</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <select name="settings[pagseguro.mode]" id="" class="form-control custom-select">
                                    <option value="production" {{ isset($settings['pagseguro.mode']) && $settings['pagseguro.mode']['value'] == 'production' ? 'selected' : '' }}>Produção</option>
                                    <option value="sandbox" {{ isset($settings['pagseguro.mode']) && $settings['pagseguro.mode']['value'] == 'sandbox' ? 'selected' : '' }}>Sandbox</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr />
                </div>
                <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">{{ __('Atualizar') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
