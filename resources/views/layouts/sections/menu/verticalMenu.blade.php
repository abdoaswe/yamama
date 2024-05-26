@php
    $configData = Helper::appClasses();
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <!-- ! Hide app brand if navbar-full -->
    @if (!isset($navbarFull))
        <div class="app-brand demo">
            <a href="{{ url('/') }}" class="app-brand-link w-100">
                {{-- <span class="app-brand-logo demo"> --}}
                {{-- @include('_partials.macros',["height"=>20]) --}}
                <img class="app-brand-logo demo w-75 m-auto h-50 p-3" src="{{ asset('assets/img/admin/basic-file.png') }}"
                    alt="">

                {{-- </span> --}}
                {{-- <span class="app-brand-text demo menu-text fw-bold">gerges</span> --}}
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
        </div>
    @endif


    <div class="menu-inner-shadow "></div>

    <ul class="menu-inner py-1">
        @php
            // Cache the results of permission checks
            $can_dashboard = auth()->user()->can('الرئسيه');
            $can_admin = auth()->user()->can('Admin');
            $can_branches = auth()->user()->can('الفروع');
            $can_item_categories = auth()->user()->can('فئات الاصناف');
            $can_items = auth()->user()->can('الاصناف');
            $can_outlay_categories = auth()->user()->can('فئات المصاريف');
            $can_outlay = auth()->user()->can('جدول المصاريف');
            $can_price_categories = auth()->user()->can('فئات الاسعار');
            $can_orders = auth()->user()->can('الطلبيات');
            $can_sales = auth()->user()->can('جدول المبيعات');
            $can_sales_report = auth()->user()->can('تقرير المبيعات');
            $can_users = auth()->user()->can('المستخدمين');
            $can_roles = auth()->user()->can('الصلاحيات');
            $can_debtors = auth()->user()->can('المدينين');
            $can_branch_debts = auth()->user()->can('ديون الفرع');
            $can_currency_exchange = auth()->user()->can('التصريف');
            $can_transfer = auth()->user()->can('المناقله');
        @endphp
    
        @if($can_dashboard)
            <li class="menu-item">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div>الرئيسية</div>
                </a>
            </li>
        @endif
    
        @if($can_admin)
            <li class="menu-item">
                <a href="{{ route('adminPanelSetting.show', 1) }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-users"></i>
                    <div>Admin</div>
                </a>
            </li>
        @endif
    
        @if($can_branches)
            <li class="menu-item">
                <a href="{{ route('branch.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-map"></i>
                    <div>الفروع</div>
                </a>
            </li>
        @endif
    
        @if($can_item_categories)
            <li class="menu-item">
                <a href="{{ route('itemcard_categories.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                    <div>فئات الأصناف</div>
                </a>
            </li>
        @endif
    
        @if($can_items)
            <li class="menu-item">
                <a href="{{ route('itemcard.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                    <div>الأصناف</div>
                </a>
            </li>
        @endif
    
        @if($can_outlay_categories)
            <li class="menu-item">
                <a href="{{ route('outlay_categori.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-forms"></i>
                    <div>فئات المدفوعات</div>
                </a>
            </li>
        @endif
    
        @if($can_outlay)
            <li class="menu-item">
                <a href="{{ route('outlay.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-file-description"></i>
                    <div>بيانات حركة الصندوق</div>
                </a>
            </li>
        @endif
    
        @if($can_price_categories)
            <li class="menu-item">
                <a href="{{ route('priceCategory.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                    <div>فئات الأسعار</div>
                </a>
            </li>
        @endif
    
        @if($can_orders)
            <li class="menu-item">
                <a href="{{ route('orders.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-truck"></i>
                    <div>الطلبيات</div>
                </a>
            </li>
        @endif
    
        @if($can_sales)
            <li class="menu-item">
                <a href="{{ route('sales.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-file-description"></i>
                    <div>جدول المبيعات</div>
                </a>
            </li>
        @endif
    
        @if($can_sales_report)
            <li class="menu-item">
                <a href="{{ route('report_sales.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-file-description"></i>
                    <div>تقرير المبيعات</div>
                </a>
            </li>
        @endif
    
        @if($can_users)
            <li class="menu-item">
                <a href="{{ route('users.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons fas fa-user-circle"></i>
                    <div>المستخدمين</div>
                </a>
            </li>
        @endif
    
        @if($can_roles)
            <li class="menu-item">
                <a href="{{ route('roles.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons fab fa-critical-role"></i>
                    <div>الصلاحيات</div>
                </a>
            </li>
        @endif
    
        @if($can_debtors)
            <li class="menu-item">
                <a href="{{ route('debtors.index') }}" class="menu-link">
                    <i class="fa-solid fa-hand-holding-hand" style="margin-right: 5%;"></i>
                    <div>المدينين</div>
                </a>
            </li>
        @endif
    
        @if($can_branch_debts)
            <li class="menu-item">
                <a href="{{ route('debts.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons fa-solid fa-scale-unbalanced"></i>
                    <div>ديون الفروع</div>
                </a>
            </li>
        @endif
    
        <li class="menu-item">
            <a href="{{ route('currency-exchange.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                <div>التصريف</div>
            </a>
        </li>
    
        @if($can_transfer)
            <li class="menu-item">
                <a href="{{ route('transfer.index') }}" class="menu-link">
                    <i class="fa-solid fa-money-bill-transfer" style="margin-right: 5%;"></i>
                    <div>المناقلة</div>
                </a>
            </li>
        @endif
    
        <li class="menu-item">
            <a href="{{ route('withdrow') }}" class="menu-link">
                <i class="fa-solid fa-money-bill-transfer" style="margin-right: 5%;"></i>
                <div>حركات الديون</div>
            </a>
        </li>
    </ul>
    

</aside>
