<x-layouts.app
    title="Admin Login | Europe Chauffeur"
    description="Europe Chauffeur admin login"
>

    <div class="page-hero">
        <div class="container-lux">

            <div style="
                max-width: 480px;
                margin: 0 auto;
            ">

                <div class="section-header center">
                    <p class="eyebrow">Admin Access</p>

                    <h2>
                        Login to Admin
                    </h2>

                    <div
                        class="gold-rule center"
                        style="margin-top: 1rem;"
                    ></div>
                </div>


                <div
                    class="sidebar-card"
                    style="margin-top: 2.5rem;"
                >

                    @if($errors->any())
                        <div style="
                            padding: 12px;
                            margin-bottom: 20px;
                            background: #fee2e2;
                            color: #991b1b;
                        ">
                            {{ $errors->first() }}
                        </div>
                    @endif


                    <form
                        method="POST"
                        action="{{ route('admin.login.submit') }}"
                    >

                        @csrf


                        <div class="bw-field">
                            <label>
                                Email Address
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                placeholder="admin@example.com"
                            >
                        </div>


                        <div
                            class="bw-field"
                            style="margin-top: 1.5rem;"
                        >
                            <label>
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                required
                                placeholder="Enter password"
                            >
                        </div>


                        <button
                            type="submit"
                            class="btn-gold btn-block"
                            style="
                                margin-top: 2rem;
                                display: flex;
                            "
                        >
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>

</x-layouts.app>