@extends('layouts.app')
@section('title', 'Regisztráció - MesterMC Bányaközpont')

@section('content')
<link rel="stylesheet" crossorigin="" href="{{ asset('assets/styles/forms.css') }}">
<style type="text/css" data-primevue-style-id="primitive-variables">
  :root {
    --p-stone-50: #fafaf9;
    --p-stone-100: #f5f5f4;
    --p-stone-200: #e7e5e4;
    --p-stone-300: #d6d3d1;
    --p-stone-400: #a8a29e;
    --p-stone-500: #78716c;
    --p-stone-600: #57534e;
    --p-stone-700: #44403c;
    --p-stone-800: #292524;
    --p-stone-900: #1c1917;
    --p-stone-950: #0c0a09;
    --p-neutral-50: #fafafa;
    --p-neutral-100: #f5f5f5;
    --p-neutral-200: #e5e5e5;
    --p-neutral-300: #d4d4d4;
    --p-neutral-400: #a3a3a3;
    --p-neutral-500: #737373;
    --p-neutral-600: #525252;
    --p-neutral-700: #404040;
    --p-neutral-800: #262626;
    --p-neutral-900: #171717;
    --p-neutral-950: #0a0a0a;
    --p-zinc-50: #fafafa;
    --p-zinc-100: #f4f4f5;
    --p-zinc-200: #e4e4e7;
    --p-zinc-300: #d4d4d8;
    --p-zinc-400: #a1a1aa;
    --p-zinc-500: #71717a;
    --p-zinc-600: #52525b;
    --p-zinc-700: #3f3f46;
    --p-zinc-800: #27272a;
    --p-zinc-900: #18181b;
    --p-zinc-950: #09090b;
    --p-gray-50: #f9fafb;
    --p-gray-100: #f3f4f6;
    --p-gray-200: #e5e7eb;
    --p-gray-300: #d1d5db;
    --p-gray-400: #9ca3af;
    --p-gray-500: #6b7280;
    --p-gray-600: #4b5563;
    --p-gray-700: #374151;
    --p-gray-800: #1f2937;
    --p-gray-900: #111827;
    --p-gray-950: #030712;
    --p-slate-50: #f8fafc;
    --p-slate-100: #f1f5f9;
    --p-slate-200: #e2e8f0;
    --p-slate-300: #cbd5e1;
    --p-slate-400: #94a3b8;
    --p-slate-500: #64748b;
    --p-slate-600: #475569;
    --p-slate-700: #334155;
    --p-slate-800: #1e293b;
    --p-slate-900: #0f172a;
    --p-slate-950: #020617;
    --p-rose-50: #fff1f2;
    --p-rose-100: #ffe4e6;
    --p-rose-200: #fecdd3;
    --p-rose-300: #fda4af;
    --p-rose-400: #fb7185;
    --p-rose-500: #f43f5e;
    --p-rose-600: #e11d48;
    --p-rose-700: #be123c;
    --p-rose-800: #9f1239;
    --p-rose-900: #881337;
    --p-rose-950: #4c0519;
    --p-pink-50: #fdf2f8;
    --p-pink-100: #fce7f3;
    --p-pink-200: #fbcfe8;
    --p-pink-300: #f9a8d4;
    --p-pink-400: #f472b6;
    --p-pink-500: #ec4899;
    --p-pink-600: #db2777;
    --p-pink-700: #be185d;
    --p-pink-800: #9d174d;
    --p-pink-900: #831843;
    --p-pink-950: #500724;
    --p-fuchsia-50: #fdf4ff;
    --p-fuchsia-100: #fae8ff;
    --p-fuchsia-200: #f5d0fe;
    --p-fuchsia-300: #f0abfc;
    --p-fuchsia-400: #e879f9;
    --p-fuchsia-500: #d946ef;
    --p-fuchsia-600: #c026d3;
    --p-fuchsia-700: #a21caf;
    --p-fuchsia-800: #86198f;
    --p-fuchsia-900: #701a75;
    --p-fuchsia-950: #4a044e;
    --p-purple-50: #faf5ff;
    --p-purple-100: #f3e8ff;
    --p-purple-200: #e9d5ff;
    --p-purple-300: #d8b4fe;
    --p-purple-400: #c084fc;
    --p-purple-500: #a855f7;
    --p-purple-600: #9333ea;
    --p-purple-700: #7e22ce;
    --p-purple-800: #6b21a8;
    --p-purple-900: #581c87;
    --p-purple-950: #3b0764;
    --p-violet-50: #f5f3ff;
    --p-violet-100: #ede9fe;
    --p-violet-200: #ddd6fe;
    --p-violet-300: #c4b5fd;
    --p-violet-400: #a78bfa;
    --p-violet-500: #8b5cf6;
    --p-violet-600: #7c3aed;
    --p-violet-700: #6d28d9;
    --p-violet-800: #5b21b6;
    --p-violet-900: #4c1d95;
    --p-violet-950: #2e1065;
    --p-indigo-50: #eef2ff;
    --p-indigo-100: #e0e7ff;
    --p-indigo-200: #c7d2fe;
    --p-indigo-300: #a5b4fc;
    --p-indigo-400: #818cf8;
    --p-indigo-500: #6366f1;
    --p-indigo-600: #4f46e5;
    --p-indigo-700: #4338ca;
    --p-indigo-800: #3730a3;
    --p-indigo-900: #312e81;
    --p-indigo-950: #1e1b4b;
    --p-blue-50: #eff6ff;
    --p-blue-100: #dbeafe;
    --p-blue-200: #bfdbfe;
    --p-blue-300: #93c5fd;
    --p-blue-400: #60a5fa;
    --p-blue-500: #3b82f6;
    --p-blue-600: #2563eb;
    --p-blue-700: #1d4ed8;
    --p-blue-800: #1e40af;
    --p-blue-900: #1e3a8a;
    --p-blue-950: #172554;
    --p-sky-50: #f0f9ff;
    --p-sky-100: #e0f2fe;
    --p-sky-200: #bae6fd;
    --p-sky-300: #7dd3fc;
    --p-sky-400: #38bdf8;
    --p-sky-500: #0ea5e9;
    --p-sky-600: #0284c7;
    --p-sky-700: #0369a1;
    --p-sky-800: #075985;
    --p-sky-900: #0c4a6e;
    --p-sky-950: #082f49;
    --p-cyan-50: #ecfeff;
    --p-cyan-100: #cffafe;
    --p-cyan-200: #a5f3fc;
    --p-cyan-300: #67e8f9;
    --p-cyan-400: #22d3ee;
    --p-cyan-500: #06b6d4;
    --p-cyan-600: #0891b2;
    --p-cyan-700: #0e7490;
    --p-cyan-800: #155e75;
    --p-cyan-900: #164e63;
    --p-cyan-950: #083344;
    --p-teal-50: #f0fdfa;
    --p-teal-100: #ccfbf1;
    --p-teal-200: #99f6e4;
    --p-teal-300: #5eead4;
    --p-teal-400: #2dd4bf;
    --p-teal-500: #14b8a6;
    --p-teal-600: #0d9488;
    --p-teal-700: #0f766e;
    --p-teal-800: #115e59;
    --p-teal-900: #134e4a;
    --p-teal-950: #042f2e;
    --p-yellow-50: #fefce8;
    --p-yellow-100: #fef9c3;
    --p-yellow-200: #fef08a;
    --p-yellow-300: #fde047;
    --p-yellow-400: #facc15;
    --p-yellow-500: #eab308;
    --p-yellow-600: #ca8a04;
    --p-yellow-700: #a16207;
    --p-yellow-800: #854d0e;
    --p-yellow-900: #713f12;
    --p-yellow-950: #422006;
    --p-amber-50: #fffbeb;
    --p-amber-100: #fef3c7;
    --p-amber-200: #fde68a;
    --p-amber-300: #fcd34d;
    --p-amber-400: #fbbf24;
    --p-amber-500: #f59e0b;
    --p-amber-600: #d97706;
    --p-amber-700: #b45309;
    --p-amber-800: #92400e;
    --p-amber-900: #78350f;
    --p-amber-950: #451a03;
    --p-orange-50: #fff7ed;
    --p-orange-100: #ffedd5;
    --p-orange-200: #fed7aa;
    --p-orange-300: #fdba74;
    --p-orange-400: #fb923c;
    --p-orange-500: #f97316;
    --p-orange-600: #ea580c;
    --p-orange-700: #c2410c;
    --p-orange-800: #9a3412;
    --p-orange-900: #7c2d12;
    --p-orange-950: #431407;
    --p-red-50: #fef2f2;
    --p-red-100: #fee2e2;
    --p-red-200: #fecaca;
    --p-red-300: #fca5a5;
    --p-red-400: #f87171;
    --p-red-500: #ef4444;
    --p-red-600: #dc2626;
    --p-red-700: #b91c1c;
    --p-red-800: #991b1b;
    --p-red-900: #7f1d1d;
    --p-red-950: #450a0a;
    --p-lime-50: #f7fee7;
    --p-lime-100: #ecfccb;
    --p-lime-200: #d9f99d;
    --p-lime-300: #bef264;
    --p-lime-400: #a3e635;
    --p-lime-500: #84cc16;
    --p-lime-600: #65a30d;
    --p-lime-700: #4d7c0f;
    --p-lime-800: #3f6212;
    --p-lime-900: #365314;
    --p-lime-950: #1a2e05;
    --p-green-50: #f0fdf4;
    --p-green-100: #dcfce7;
    --p-green-200: #bbf7d0;
    --p-green-300: #86efac;
    --p-green-400: #4ade80;
    --p-green-500: #22c55e;
    --p-green-600: #16a34a;
    --p-green-700: #15803d;
    --p-green-800: #166534;
    --p-green-900: #14532d;
    --p-green-950: #052e16;
    --p-emerald-50: #ecfdf5;
    --p-emerald-100: #d1fae5;
    --p-emerald-200: #a7f3d0;
    --p-emerald-300: #6ee7b7;
    --p-emerald-400: #34d399;
    --p-emerald-500: #10b981;
    --p-emerald-600: #059669;
    --p-emerald-700: #047857;
    --p-emerald-800: #065f46;
    --p-emerald-900: #064e3b;
    --p-emerald-950: #022c22;
    --p-border-radius-none: 0;
    --p-border-radius-xs: 2px;
    --p-border-radius-sm: 4px;
    --p-border-radius-md: 6px;
    --p-border-radius-lg: 8px;
    --p-border-radius-xl: 12px;
  }
</style>
<style type="text/css" data-primevue-style-id="semantic-variables">
  :root {
    --p-transition-duration: 0.2s;
    --p-disabled-opacity: 0.6;
    --p-icon-size: 1rem;
    --p-anchor-gutter: 2px;
    --p-overlay-navigation-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
    --p-overlay-modal-border-radius: var(--p-border-radius-xl);
    --p-overlay-modal-padding: 1.25rem;
    --p-overlay-modal-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
    --p-overlay-popover-border-radius: var(--p-border-radius-md);
    --p-overlay-popover-padding: 0.75rem;
    --p-overlay-popover-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
    --p-overlay-select-border-radius: var(--p-border-radius-md);
    --p-overlay-select-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
    --p-navigation-submenu-icon-size: 0.875rem;
    --p-navigation-submenu-label-padding: 0.5rem 0.75rem;
    --p-navigation-submenu-label-font-weight: 600;
    --p-navigation-item-padding: 0.5rem 0.75rem;
    --p-navigation-item-border-radius: var(--p-border-radius-sm);
    --p-navigation-item-gap: 0.5rem;
    --p-navigation-list-padding: 0.25rem 0.25rem;
    --p-navigation-list-gap: 2px;
    --p-mask-transition-duration: 0.15s;
    --p-content-border-radius: var(--p-border-radius-md);
    --p-list-padding: 0.25rem 0.25rem;
    --p-list-gap: 2px;
    --p-list-option-group-padding: 0.5rem 0.75rem;
    --p-list-option-group-font-weight: 600;
    --p-list-option-padding: 0.5rem 0.75rem;
    --p-list-option-border-radius: var(--p-border-radius-sm);
    --p-list-header-padding: 0.5rem 1rem 0.25rem 1rem;
    --p-form-field-padding-x: 0.75rem;
    --p-form-field-padding-y: 0.5rem;
    --p-form-field-border-radius: var(--p-border-radius-md);
    --p-form-field-transition-duration: var(--p-transition-duration);
    --p-form-field-focus-ring-width: 0;
    --p-form-field-focus-ring-style: none;
    --p-form-field-focus-ring-color: transparent;
    --p-form-field-focus-ring-offset: 0;
    --p-form-field-focus-ring-shadow: none;
    --p-form-field-lg-font-size: 1.125rem;
    --p-form-field-lg-padding-x: 0.875rem;
    --p-form-field-lg-padding-y: 0.625rem;
    --p-form-field-sm-font-size: 0.875rem;
    --p-form-field-sm-padding-x: 0.625rem;
    --p-form-field-sm-padding-y: 0.375rem;
    --p-primary-50: var(--p-emerald-50);
    --p-primary-100: var(--p-emerald-100);
    --p-primary-200: var(--p-emerald-200);
    --p-primary-300: var(--p-emerald-300);
    --p-primary-400: var(--p-emerald-400);
    --p-primary-500: var(--p-emerald-500);
    --p-primary-600: var(--p-emerald-600);
    --p-primary-700: var(--p-emerald-700);
    --p-primary-800: var(--p-emerald-800);
    --p-primary-900: var(--p-emerald-900);
    --p-primary-950: var(--p-emerald-950);
    --p-focus-ring-width: 1px;
    --p-focus-ring-style: solid;
    --p-focus-ring-color: var(--p-primary-color);
    --p-focus-ring-offset: 2px;
    --p-focus-ring-shadow: none;
    --p-navigation-submenu-icon-color: var(--p-surface-400);
    --p-navigation-submenu-icon-focus-color: var(--p-surface-500);
    --p-navigation-submenu-icon-active-color: var(--p-surface-500);
    --p-navigation-submenu-label-background: transparent;
    --p-navigation-submenu-label-color: var(--p-text-muted-color);
    --p-navigation-item-focus-background: var(--p-surface-100);
    --p-navigation-item-active-background: var(--p-surface-100);
    --p-navigation-item-color: var(--p-text-color);
    --p-navigation-item-focus-color: var(--p-text-hover-color);
    --p-navigation-item-active-color: var(--p-text-hover-color);
    --p-navigation-item-icon-color: var(--p-surface-400);
    --p-navigation-item-icon-focus-color: var(--p-surface-500);
    --p-navigation-item-icon-active-color: var(--p-surface-500);
    --p-list-option-group-background: transparent;
    --p-list-option-group-color: var(--p-text-muted-color);
    --p-list-option-focus-background: var(--p-surface-100);
    --p-list-option-selected-background: var(--p-highlight-background);
    --p-list-option-selected-focus-background: var(--p-highlight-focus-background);
    --p-list-option-color: var(--p-text-color);
    --p-list-option-focus-color: var(--p-text-hover-color);
    --p-list-option-selected-color: var(--p-highlight-color);
    --p-list-option-selected-focus-color: var(--p-highlight-focus-color);
    --p-list-option-icon-color: var(--p-surface-400);
    --p-list-option-icon-focus-color: var(--p-surface-500);
    --p-overlay-modal-background: var(--p-surface-0);
    --p-overlay-modal-border-color: var(--p-surface-200);
    --p-overlay-modal-color: var(--p-text-color);
    --p-overlay-popover-background: var(--p-surface-0);
    --p-overlay-popover-border-color: var(--p-surface-200);
    --p-overlay-popover-color: var(--p-text-color);
    --p-overlay-select-background: var(--p-surface-0);
    --p-overlay-select-border-color: var(--p-surface-200);
    --p-overlay-select-color: var(--p-text-color);
    --p-content-background: var(--p-surface-0);
    --p-content-hover-background: var(--p-surface-100);
    --p-content-border-color: var(--p-surface-200);
    --p-content-color: var(--p-text-color);
    --p-content-hover-color: var(--p-text-hover-color);
    --p-text-color: var(--p-surface-700);
    --p-text-hover-color: var(--p-surface-800);
    --p-text-muted-color: var(--p-surface-500);
    --p-text-hover-muted-color: var(--p-surface-600);
    --p-form-field-background: var(--p-surface-0);
    --p-form-field-disabled-background: var(--p-surface-200);
    --p-form-field-filled-background: var(--p-surface-50);
    --p-form-field-filled-hover-background: var(--p-surface-50);
    --p-form-field-filled-focus-background: var(--p-surface-50);
    --p-form-field-border-color: var(--p-surface-300);
    --p-form-field-hover-border-color: var(--p-surface-400);
    --p-form-field-focus-border-color: var(--p-primary-color);
    --p-form-field-invalid-border-color: var(--p-red-400);
    --p-form-field-color: var(--p-surface-700);
    --p-form-field-disabled-color: var(--p-surface-500);
    --p-form-field-placeholder-color: var(--p-surface-500);
    --p-form-field-invalid-placeholder-color: var(--p-red-600);
    --p-form-field-float-label-color: var(--p-surface-500);
    --p-form-field-float-label-focus-color: var(--p-primary-600);
    --p-form-field-float-label-active-color: var(--p-surface-500);
    --p-form-field-float-label-invalid-color: var(--p-form-field-invalid-placeholder-color);
    --p-form-field-icon-color: var(--p-surface-400);
    --p-form-field-shadow: 0 0 #0000, 0 0 #0000, 0 1px 2px 0 rgba(18, 18, 23, 0.05);
    --p-mask-background: rgba(0, 0, 0, 0.4);
    --p-mask-color: var(--p-surface-200);
    --p-highlight-background: var(--p-primary-50);
    --p-highlight-focus-background: var(--p-primary-100);
    --p-highlight-color: var(--p-primary-700);
    --p-highlight-focus-color: var(--p-primary-800);
    --p-primary-color: var(--p-primary-500);
    --p-primary-contrast-color: #ffffff;
    --p-primary-hover-color: var(--p-primary-600);
    --p-primary-active-color: var(--p-primary-700);
    --p-surface-0: #ffffff;
    --p-surface-50: var(--p-slate-50);
    --p-surface-100: var(--p-slate-100);
    --p-surface-200: var(--p-slate-200);
    --p-surface-300: var(--p-slate-300);
    --p-surface-400: var(--p-slate-400);
    --p-surface-500: var(--p-slate-500);
    --p-surface-600: var(--p-slate-600);
    --p-surface-700: var(--p-slate-700);
    --p-surface-800: var(--p-slate-800);
    --p-surface-900: var(--p-slate-900);
    --p-surface-950: var(--p-slate-950);
  }

  .p-dark {
    --p-navigation-submenu-icon-color: var(--p-surface-500);
    --p-navigation-submenu-icon-focus-color: var(--p-surface-400);
    --p-navigation-submenu-icon-active-color: var(--p-surface-400);
    --p-navigation-submenu-label-background: transparent;
    --p-navigation-submenu-label-color: var(--p-text-muted-color);
    --p-navigation-item-focus-background: var(--p-surface-800);
    --p-navigation-item-active-background: var(--p-surface-800);
    --p-navigation-item-color: var(--p-text-color);
    --p-navigation-item-focus-color: var(--p-text-hover-color);
    --p-navigation-item-active-color: var(--p-text-hover-color);
    --p-navigation-item-icon-color: var(--p-surface-500);
    --p-navigation-item-icon-focus-color: var(--p-surface-400);
    --p-navigation-item-icon-active-color: var(--p-surface-400);
    --p-list-option-group-background: transparent;
    --p-list-option-group-color: var(--p-text-muted-color);
    --p-list-option-focus-background: var(--p-surface-800);
    --p-list-option-selected-background: var(--p-highlight-background);
    --p-list-option-selected-focus-background: var(--p-highlight-focus-background);
    --p-list-option-color: var(--p-text-color);
    --p-list-option-focus-color: var(--p-text-hover-color);
    --p-list-option-selected-color: var(--p-highlight-color);
    --p-list-option-selected-focus-color: var(--p-highlight-focus-color);
    --p-list-option-icon-color: var(--p-surface-500);
    --p-list-option-icon-focus-color: var(--p-surface-400);
    --p-overlay-modal-background: var(--p-surface-900);
    --p-overlay-modal-border-color: var(--p-surface-700);
    --p-overlay-modal-color: var(--p-text-color);
    --p-overlay-popover-background: var(--p-surface-900);
    --p-overlay-popover-border-color: var(--p-surface-700);
    --p-overlay-popover-color: var(--p-text-color);
    --p-overlay-select-background: var(--p-surface-900);
    --p-overlay-select-border-color: var(--p-surface-700);
    --p-overlay-select-color: var(--p-text-color);
    --p-content-background: var(--p-surface-900);
    --p-content-hover-background: var(--p-surface-800);
    --p-content-border-color: var(--p-surface-700);
    --p-content-color: var(--p-text-color);
    --p-content-hover-color: var(--p-text-hover-color);
    --p-text-color: var(--p-surface-0);
    --p-text-hover-color: var(--p-surface-0);
    --p-text-muted-color: var(--p-surface-400);
    --p-text-hover-muted-color: var(--p-surface-300);
    --p-form-field-background: var(--p-surface-950);
    --p-form-field-disabled-background: var(--p-surface-700);
    --p-form-field-filled-background: var(--p-surface-800);
    --p-form-field-filled-hover-background: var(--p-surface-800);
    --p-form-field-filled-focus-background: var(--p-surface-800);
    --p-form-field-border-color: var(--p-surface-600);
    --p-form-field-hover-border-color: var(--p-surface-500);
    --p-form-field-focus-border-color: var(--p-primary-color);
    --p-form-field-invalid-border-color: var(--p-red-300);
    --p-form-field-color: var(--p-surface-0);
    --p-form-field-disabled-color: var(--p-surface-400);
    --p-form-field-placeholder-color: var(--p-surface-400);
    --p-form-field-invalid-placeholder-color: var(--p-red-400);
    --p-form-field-float-label-color: var(--p-surface-400);
    --p-form-field-float-label-focus-color: var(--p-primary-color);
    --p-form-field-float-label-active-color: var(--p-surface-400);
    --p-form-field-float-label-invalid-color: var(--p-form-field-invalid-placeholder-color);
    --p-form-field-icon-color: var(--p-surface-400);
    --p-form-field-shadow: 0 0 #0000, 0 0 #0000, 0 1px 2px 0 rgba(18, 18, 23, 0.05);
    --p-mask-background: rgba(0, 0, 0, 0.6);
    --p-mask-color: var(--p-surface-200);
    --p-highlight-background: color-mix(in srgb, var(--p-primary-400), transparent 84%);
    --p-highlight-focus-background: color-mix(in srgb, var(--p-primary-400), transparent 76%);
    --p-highlight-color: rgba(255, 255, 255, .87);
    --p-highlight-focus-color: rgba(255, 255, 255, .87);
    --p-primary-color: var(--p-primary-400);
    --p-primary-contrast-color: var(--p-surface-900);
    --p-primary-hover-color: var(--p-primary-300);
    --p-primary-active-color: var(--p-primary-200);
    --p-surface-0: #ffffff;
    --p-surface-50: var(--p-zinc-50);
    --p-surface-100: var(--p-zinc-100);
    --p-surface-200: var(--p-zinc-200);
    --p-surface-300: var(--p-zinc-300);
    --p-surface-400: var(--p-zinc-400);
    --p-surface-500: var(--p-zinc-500);
    --p-surface-600: var(--p-zinc-600);
    --p-surface-700: var(--p-zinc-700);
    --p-surface-800: var(--p-zinc-800);
    --p-surface-900: var(--p-zinc-900);
    --p-surface-950: var(--p-zinc-950);
  }
</style>
<style type="text/css" data-primevue-style-id="global-variables">
  :root {
    color-scheme: light
  }

  .p-dark {
    color-scheme: dark
  }
</style>
<style type="text/css" data-primevue-style-id="global-style">
  *,
  ::before,
  ::after {
    box-sizing: border-box;
  }

  .p-connected-overlay {
    opacity: 0;
    transform: scaleY(0.8);
    transition: transform 0.12s cubic-bezier(0, 0, 0.2, 1), opacity 0.12s cubic-bezier(0, 0, 0.2, 1);
  }

  .p-connected-overlay-visible {
    opacity: 1;
    transform: scaleY(1);
  }

  .p-connected-overlay-hidden {
    opacity: 0;
    transform: scaleY(1);
    transition: opacity 0.1s linear;
  }

  .p-connected-overlay-enter-from {
    opacity: 0;
    transform: scaleY(0.8);
  }

  .p-connected-overlay-leave-to {
    opacity: 0;
  }

  .p-connected-overlay-enter-active {
    transition: transform 0.12s cubic-bezier(0, 0, 0.2, 1), opacity 0.12s cubic-bezier(0, 0, 0.2, 1);
  }

  .p-connected-overlay-leave-active {
    transition: opacity 0.1s linear;
  }

  .p-toggleable-content-enter-from,
  .p-toggleable-content-leave-to {
    max-height: 0;
  }

  .p-toggleable-content-enter-to,
  .p-toggleable-content-leave-from {
    max-height: 1000px;
  }

  .p-toggleable-content-leave-active {
    overflow: hidden;
    transition: max-height 0.45s cubic-bezier(0, 1, 0, 1);
  }

  .p-toggleable-content-enter-active {
    overflow: hidden;
    transition: max-height 1s ease-in-out;
  }

  .p-disabled,
  .p-disabled * {
    cursor: default;
    pointer-events: none;
    user-select: none;
  }

  .p-disabled,
  .p-component:disabled {
    opacity: var(--p-disabled-opacity);
  }

  .pi {
    font-size: var(--p-icon-size);
  }

  .p-icon {
    width: var(--p-icon-size);
    height: var(--p-icon-size);
  }

  .p-overlay-mask {
    background: var(--p-mask-background);
    color: var(--p-mask-color);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .p-overlay-mask-enter {
    animation: p-overlay-mask-enter-animation var(--p-mask-transition-duration) forwards;
  }

  .p-overlay-mask-leave {
    animation: p-overlay-mask-leave-animation var(--p-mask-transition-duration) forwards;
  }

  @keyframes p-overlay-mask-enter-animation {
    from {
      background: transparent;
    }

    to {
      background: var(--p-mask-background);
    }
  }

  @keyframes p-overlay-mask-leave-animation {
    from {
      background: var(--p-mask-background);
    }

    to {
      background: transparent;
    }
  }
</style>
<style type="text/css" data-primevue-style-id="base">
  .p-hidden-accessible {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    opacity: 0;
    overflow: hidden;
    padding: 0;
    pointer-events: none;
    position: absolute;
    white-space: nowrap;
    width: 1px;
  }

  .p-overflow-hidden {
    overflow: hidden;
    padding-right: var(--p-scrollbar-width);
  }
</style>
<style type="text/css" data-primevue-style-id="badge-variables">
  :root {
    --p-badge-xl-font-size: 1rem;
    --p-badge-xl-min-width: 2rem;
    --p-badge-xl-height: 2rem;
    --p-badge-lg-font-size: 0.875rem;
    --p-badge-lg-min-width: 1.75rem;
    --p-badge-lg-height: 1.75rem;
    --p-badge-sm-font-size: 0.625rem;
    --p-badge-sm-min-width: 1.25rem;
    --p-badge-sm-height: 1.25rem;
    --p-badge-dot-size: 0.5rem;
    --p-badge-border-radius: var(--p-border-radius-md);
    --p-badge-padding: 0 0.5rem;
    --p-badge-font-size: 0.75rem;
    --p-badge-font-weight: 700;
    --p-badge-min-width: 1.5rem;
    --p-badge-height: 1.5rem;
    --p-badge-contrast-background: var(--p-surface-950);
    --p-badge-contrast-color: var(--p-surface-0);
    --p-badge-danger-background: var(--p-red-500);
    --p-badge-danger-color: var(--p-surface-0);
    --p-badge-warn-background: var(--p-orange-500);
    --p-badge-warn-color: var(--p-surface-0);
    --p-badge-info-background: var(--p-sky-500);
    --p-badge-info-color: var(--p-surface-0);
    --p-badge-success-background: var(--p-green-500);
    --p-badge-success-color: var(--p-surface-0);
    --p-badge-secondary-background: var(--p-surface-100);
    --p-badge-secondary-color: var(--p-surface-600);
    --p-badge-primary-background: var(--p-primary-color);
    --p-badge-primary-color: var(--p-primary-contrast-color);
  }

  .p-dark {
    --p-badge-contrast-background: var(--p-surface-0);
    --p-badge-contrast-color: var(--p-surface-950);
    --p-badge-danger-background: var(--p-red-400);
    --p-badge-danger-color: var(--p-red-950);
    --p-badge-warn-background: var(--p-orange-400);
    --p-badge-warn-color: var(--p-orange-950);
    --p-badge-info-background: var(--p-sky-400);
    --p-badge-info-color: var(--p-sky-950);
    --p-badge-success-background: var(--p-green-400);
    --p-badge-success-color: var(--p-green-950);
    --p-badge-secondary-background: var(--p-surface-800);
    --p-badge-secondary-color: var(--p-surface-300);
    --p-badge-primary-background: var(--p-primary-color);
    --p-badge-primary-color: var(--p-primary-contrast-color);
  }
</style>
<style type="text/css" data-primevue-style-id="badge-style">
  .p-badge {
    display: inline-flex;
    border-radius: var(--p-badge-border-radius);
    align-items: center;
    justify-content: center;
    padding: var(--p-badge-padding);
    background: var(--p-badge-primary-background);
    color: var(--p-badge-primary-color);
    font-size: var(--p-badge-font-size);
    font-weight: var(--p-badge-font-weight);
    min-width: var(--p-badge-min-width);
    height: var(--p-badge-height);
  }

  .p-badge-dot {
    width: var(--p-badge-dot-size);
    min-width: var(--p-badge-dot-size);
    height: var(--p-badge-dot-size);
    border-radius: 50%;
    padding: 0;
  }

  .p-badge-circle {
    padding: 0;
    border-radius: 50%;
  }

  .p-badge-secondary {
    background: var(--p-badge-secondary-background);
    color: var(--p-badge-secondary-color);
  }

  .p-badge-success {
    background: var(--p-badge-success-background);
    color: var(--p-badge-success-color);
  }

  .p-badge-info {
    background: var(--p-badge-info-background);
    color: var(--p-badge-info-color);
  }

  .p-badge-warn {
    background: var(--p-badge-warn-background);
    color: var(--p-badge-warn-color);
  }

  .p-badge-danger {
    background: var(--p-badge-danger-background);
    color: var(--p-badge-danger-color);
  }

  .p-badge-contrast {
    background: var(--p-badge-contrast-background);
    color: var(--p-badge-contrast-color);
  }

  .p-badge-sm {
    font-size: var(--p-badge-sm-font-size);
    min-width: var(--p-badge-sm-min-width);
    height: var(--p-badge-sm-height);
  }

  .p-badge-lg {
    font-size: var(--p-badge-lg-font-size);
    min-width: var(--p-badge-lg-min-width);
    height: var(--p-badge-lg-height);
  }

  .p-badge-xl {
    font-size: var(--p-badge-xl-font-size);
    min-width: var(--p-badge-xl-min-width);
    height: var(--p-badge-xl-height);
  }
</style>
<style type="text/css" data-primevue-style-id="dialog-variables">
  :root {
    --p-dialog-footer-padding: 0 var(--p-overlay-modal-padding) var(--p-overlay-modal-padding) var(--p-overlay-modal-padding);
    --p-dialog-footer-gap: 0.5rem;
    --p-dialog-content-padding: 0 var(--p-overlay-modal-padding) var(--p-overlay-modal-padding) var(--p-overlay-modal-padding);
    --p-dialog-title-font-size: 1.25rem;
    --p-dialog-title-font-weight: 600;
    --p-dialog-header-padding: var(--p-overlay-modal-padding);
    --p-dialog-header-gap: 0.5rem;
    --p-dialog-background: var(--p-overlay-modal-background);
    --p-dialog-border-color: var(--p-overlay-modal-border-color);
    --p-dialog-color: var(--p-overlay-modal-color);
    --p-dialog-border-radius: var(--p-overlay-modal-border-radius);
    --p-dialog-shadow: var(--p-overlay-modal-shadow);
  }
</style>
<style type="text/css" data-primevue-style-id="dialog-style">
  .p-dialog {
    max-height: 90%;
    transform: scale(1);
    border-radius: var(--p-dialog-border-radius);
    box-shadow: var(--p-dialog-shadow);
    background: var(--p-dialog-background);
    border: 1px solid var(--p-dialog-border-color);
    color: var(--p-dialog-color);
  }

  .p-dialog-content {
    overflow-y: auto;
    padding: var(--p-dialog-content-padding);
  }

  .p-dialog-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-shrink: 0;
    padding: var(--p-dialog-header-padding);
  }

  .p-dialog-title {
    font-weight: var(--p-dialog-title-font-weight);
    font-size: var(--p-dialog-title-font-size);
  }

  .p-dialog-footer {
    flex-shrink: 0;
    padding: var(--p-dialog-footer-padding);
    display: flex;
    justify-content: flex-end;
    gap: var(--p-dialog-footer-gap);
  }

  .p-dialog-header-actions {
    display: flex;
    align-items: center;
    gap: var(--p-dialog-header-gap);
  }

  .p-dialog-enter-active {
    transition: all 150ms cubic-bezier(0, 0, 0.2, 1);
  }

  .p-dialog-leave-active {
    transition: all 150ms cubic-bezier(0.4, 0, 0.2, 1);
  }

  .p-dialog-enter-from,
  .p-dialog-leave-to {
    opacity: 0;
    transform: scale(0.7);
  }

  .p-dialog-top .p-dialog,
  .p-dialog-bottom .p-dialog,
  .p-dialog-left .p-dialog,
  .p-dialog-right .p-dialog,
  .p-dialog-topleft .p-dialog,
  .p-dialog-topright .p-dialog,
  .p-dialog-bottomleft .p-dialog,
  .p-dialog-bottomright .p-dialog {
    margin: 0.75rem;
    transform: translate3d(0px, 0px, 0px);
  }

  .p-dialog-top .p-dialog-enter-active,
  .p-dialog-top .p-dialog-leave-active,
  .p-dialog-bottom .p-dialog-enter-active,
  .p-dialog-bottom .p-dialog-leave-active,
  .p-dialog-left .p-dialog-enter-active,
  .p-dialog-left .p-dialog-leave-active,
  .p-dialog-right .p-dialog-enter-active,
  .p-dialog-right .p-dialog-leave-active,
  .p-dialog-topleft .p-dialog-enter-active,
  .p-dialog-topleft .p-dialog-leave-active,
  .p-dialog-topright .p-dialog-enter-active,
  .p-dialog-topright .p-dialog-leave-active,
  .p-dialog-bottomleft .p-dialog-enter-active,
  .p-dialog-bottomleft .p-dialog-leave-active,
  .p-dialog-bottomright .p-dialog-enter-active,
  .p-dialog-bottomright .p-dialog-leave-active {
    transition: all 0.3s ease-out;
  }

  .p-dialog-top .p-dialog-enter-from,
  .p-dialog-top .p-dialog-leave-to {
    transform: translate3d(0px, -100%, 0px);
  }

  .p-dialog-bottom .p-dialog-enter-from,
  .p-dialog-bottom .p-dialog-leave-to {
    transform: translate3d(0px, 100%, 0px);
  }

  .p-dialog-left .p-dialog-enter-from,
  .p-dialog-left .p-dialog-leave-to,
  .p-dialog-topleft .p-dialog-enter-from,
  .p-dialog-topleft .p-dialog-leave-to,
  .p-dialog-bottomleft .p-dialog-enter-from,
  .p-dialog-bottomleft .p-dialog-leave-to {
    transform: translate3d(-100%, 0px, 0px);
  }

  .p-dialog-right .p-dialog-enter-from,
  .p-dialog-right .p-dialog-leave-to,
  .p-dialog-topright .p-dialog-enter-from,
  .p-dialog-topright .p-dialog-leave-to,
  .p-dialog-bottomright .p-dialog-enter-from,
  .p-dialog-bottomright .p-dialog-leave-to {
    transform: translate3d(100%, 0px, 0px);
  }

  .p-dialog-left:dir(rtl) .p-dialog-enter-from,
  .p-dialog-left:dir(rtl) .p-dialog-leave-to,
  .p-dialog-topleft:dir(rtl) .p-dialog-enter-from,
  .p-dialog-topleft:dir(rtl) .p-dialog-leave-to,
  .p-dialog-bottomleft:dir(rtl) .p-dialog-enter-from,
  .p-dialog-bottomleft:dir(rtl) .p-dialog-leave-to {
    transform: translate3d(100%, 0px, 0px);
  }

  .p-dialog-right:dir(rtl) .p-dialog-enter-from,
  .p-dialog-right:dir(rtl) .p-dialog-leave-to,
  .p-dialog-topright:dir(rtl) .p-dialog-enter-from,
  .p-dialog-topright:dir(rtl) .p-dialog-leave-to,
  .p-dialog-bottomright:dir(rtl) .p-dialog-enter-from,
  .p-dialog-bottomright:dir(rtl) .p-dialog-leave-to {
    transform: translate3d(-100%, 0px, 0px);
  }

  .p-dialog-maximized {
    width: 100vw !important;
    height: 100vh !important;
    top: 0px !important;
    left: 0px !important;
    max-height: 100%;
    height: 100%;
    border-radius: 0;
  }

  .p-dialog-maximized .p-dialog-content {
    flex-grow: 1;
  }

  .p-dialog .p-resizable-handle {
    position: absolute;
    font-size: 0.1px;
    display: block;
    cursor: se-resize;
    width: 12px;
    height: 12px;
    right: 1px;
    bottom: 1px;
  }
</style>
<style type="text/css" data-primevue-style-id="inputtext-variables">
  :root {
    --p-inputtext-background: var(--p-form-field-background);
    --p-inputtext-disabled-background: var(--p-form-field-disabled-background);
    --p-inputtext-filled-background: var(--p-form-field-filled-background);
    --p-inputtext-filled-hover-background: var(--p-form-field-filled-hover-background);
    --p-inputtext-filled-focus-background: var(--p-form-field-filled-focus-background);
    --p-inputtext-border-color: var(--p-form-field-border-color);
    --p-inputtext-hover-border-color: var(--p-form-field-hover-border-color);
    --p-inputtext-focus-border-color: var(--p-form-field-focus-border-color);
    --p-inputtext-invalid-border-color: var(--p-form-field-invalid-border-color);
    --p-inputtext-color: var(--p-form-field-color);
    --p-inputtext-disabled-color: var(--p-form-field-disabled-color);
    --p-inputtext-placeholder-color: var(--p-form-field-placeholder-color);
    --p-inputtext-invalid-placeholder-color: var(--p-form-field-invalid-placeholder-color);
    --p-inputtext-shadow: var(--p-form-field-shadow);
    --p-inputtext-padding-x: var(--p-form-field-padding-x);
    --p-inputtext-padding-y: var(--p-form-field-padding-y);
    --p-inputtext-border-radius: var(--p-form-field-border-radius);
    --p-inputtext-transition-duration: var(--p-form-field-transition-duration);
    --p-inputtext-lg-font-size: var(--p-form-field-lg-font-size);
    --p-inputtext-lg-padding-x: var(--p-form-field-lg-padding-x);
    --p-inputtext-lg-padding-y: var(--p-form-field-lg-padding-y);
    --p-inputtext-sm-font-size: var(--p-form-field-sm-font-size);
    --p-inputtext-sm-padding-x: var(--p-form-field-sm-padding-x);
    --p-inputtext-sm-padding-y: var(--p-form-field-sm-padding-y);
    --p-inputtext-focus-ring-width: var(--p-form-field-focus-ring-width);
    --p-inputtext-focus-ring-style: var(--p-form-field-focus-ring-style);
    --p-inputtext-focus-ring-color: var(--p-form-field-focus-ring-color);
    --p-inputtext-focus-ring-offset: var(--p-form-field-focus-ring-offset);
    --p-inputtext-focus-ring-shadow: var(--p-form-field-focus-ring-shadow);
  }
</style>
<style type="text/css" data-primevue-style-id="inputtext-style">
  .p-inputtext {
    font-family: inherit;
    font-feature-settings: inherit;
    font-size: 1rem;
    color: var(--p-inputtext-color);
    background: var(--p-inputtext-background);
    padding-block: var(--p-inputtext-padding-y);
    padding-inline: var(--p-inputtext-padding-x);
    border: 1px solid var(--p-inputtext-border-color);
    transition: background var(--p-inputtext-transition-duration), color var(--p-inputtext-transition-duration), border-color var(--p-inputtext-transition-duration), outline-color var(--p-inputtext-transition-duration), box-shadow var(--p-inputtext-transition-duration);
    appearance: none;
    border-radius: var(--p-inputtext-border-radius);
    outline-color: transparent;
    box-shadow: var(--p-inputtext-shadow);
  }

  .p-inputtext:enabled:hover {
    border-color: var(--p-inputtext-hover-border-color);
  }

  .p-inputtext:enabled:focus {
    border-color: var(--p-inputtext-focus-border-color);
    box-shadow: var(--p-inputtext-focus-ring-shadow);
    outline: var(--p-inputtext-focus-ring-width) var(--p-inputtext-focus-ring-style) var(--p-inputtext-focus-ring-color);
    outline-offset: var(--p-inputtext-focus-ring-offset);
  }

  .p-inputtext.p-invalid {
    border-color: var(--p-inputtext-invalid-border-color);
  }

  .p-inputtext.p-variant-filled {
    background: var(--p-inputtext-filled-background);
  }

  .p-inputtext.p-variant-filled:enabled:hover {
    background: var(--p-inputtext-filled-hover-background);
  }

  .p-inputtext.p-variant-filled:enabled:focus {
    background: var(--p-inputtext-filled-focus-background);
  }

  .p-inputtext:disabled {
    opacity: 1;
    background: var(--p-inputtext-disabled-background);
    color: var(--p-inputtext-disabled-color);
  }

  .p-inputtext::placeholder {
    color: var(--p-inputtext-placeholder-color);
  }

  .p-inputtext.p-invalid::placeholder {
    color: var(--p-inputtext-invalid-placeholder-color);
  }

  .p-inputtext-sm {
    font-size: var(--p-inputtext-sm-font-size);
    padding-block: var(--p-inputtext-sm-padding-y);
    padding-inline: var(--p-inputtext-sm-padding-x);
  }

  .p-inputtext-lg {
    font-size: var(--p-inputtext-lg-font-size);
    padding-block: var(--p-inputtext-lg-padding-y);
    padding-inline: var(--p-inputtext-lg-padding-x);
  }

  .p-inputtext-fluid {
    width: 100%;
  }
</style>
<style type="text/css" data-primevue-style-id="baseicon">
  .p-icon {
    display: inline-block;
    vertical-align: baseline;
  }

  .p-icon-spin {
    -webkit-animation: p-icon-spin 2s infinite linear;
    animation: p-icon-spin 2s infinite linear;
  }

  @-webkit-keyframes p-icon-spin {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }

    100% {
      -webkit-transform: rotate(359deg);
      transform: rotate(359deg);
    }
  }

  @keyframes p-icon-spin {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }

    100% {
      -webkit-transform: rotate(359deg);
      transform: rotate(359deg);
    }
  }
</style>
<style type="text/css" data-primevue-style-id="ripple-directive-variables">
  :root {
    --p-ripple-background: rgba(0, 0, 0, 0.1);
  }

  .p-dark {
    --p-ripple-background: rgba(255, 255, 255, 0.3);
  }
</style>
<style type="text/css" data-primevue-style-id="ripple-directive-style">
  .p-ink {
    display: block;
    position: absolute;
    background: var(--p-ripple-background);
    border-radius: 100%;
    transform: scale(0);
    pointer-events: none;
  }

  .p-ink-active {
    animation: ripple 0.4s linear;
  }

  @keyframes ripple {
    100% {
      opacity: 0;
      transform: scale(2.5);
    }
  }
</style>
<style type="text/css" data-primevue-style-id="password-variables">
  :root {
    --p-password-content-gap: 0.5rem;
    --p-password-overlay-background: var(--p-overlay-popover-background);
    --p-password-overlay-border-color: var(--p-overlay-popover-border-color);
    --p-password-overlay-border-radius: var(--p-overlay-popover-border-radius);
    --p-password-overlay-color: var(--p-overlay-popover-color);
    --p-password-overlay-padding: var(--p-overlay-popover-padding);
    --p-password-overlay-shadow: var(--p-overlay-popover-shadow);
    --p-password-icon-color: var(--p-form-field-icon-color);
    --p-password-meter-background: var(--p-content-border-color);
    --p-password-meter-border-radius: var(--p-content-border-radius);
    --p-password-meter-height: .75rem;
    --p-password-strength-weak-background: var(--p-red-500);
    --p-password-strength-medium-background: var(--p-amber-500);
    --p-password-strength-strong-background: var(--p-green-500);
  }

  .p-dark {
    --p-password-strength-weak-background: var(--p-red-400);
    --p-password-strength-medium-background: var(--p-amber-400);
    --p-password-strength-strong-background: var(--p-green-400);
  }
</style>
<style type="text/css" data-primevue-style-id="password-style">
  .p-password {
    display: inline-flex;
    position: relative;
  }

  .p-password .p-password-overlay {
    min-width: 100%;
  }

  .p-password-meter {
    height: var(--p-password-meter-height);
    background: var(--p-password-meter-background);
    border-radius: var(--p-password-meter-border-radius);
  }

  .p-password-meter-label {
    height: 100%;
    width: 0;
    transition: width 1s ease-in-out;
    border-radius: var(--p-password-meter-border-radius);
  }

  .p-password-meter-weak {
    background: var(--p-password-strength-weak-background);
  }

  .p-password-meter-medium {
    background: var(--p-password-strength-medium-background);
  }

  .p-password-meter-strong {
    background: var(--p-password-strength-strong-background);
  }

  .p-password-fluid {
    display: flex;
  }

  .p-password-fluid .p-password-input {
    width: 100%;
  }

  .p-password-input::-ms-reveal,
  .p-password-input::-ms-clear {
    display: none;
  }

  .p-password-overlay {
    padding: var(--p-password-overlay-padding);
    background: var(--p-password-overlay-background);
    color: var(--p-password-overlay-color);
    border: 1px solid var(--p-password-overlay-border-color);
    box-shadow: var(--p-password-overlay-shadow);
    border-radius: var(--p-password-overlay-border-radius);
  }

  .p-password-content {
    display: flex;
    flex-direction: column;
    gap: var(--p-password-content-gap);
  }

  .p-password-toggle-mask-icon {
    inset-inline-end: var(--p-form-field-padding-x);
    color: var(--p-password-icon-color);
    position: absolute;
    top: 50%;
    margin-top: calc(-1 * calc(var(--p-icon-size) / 2));
    width: var(--p-icon-size);
    height: var(--p-icon-size);
  }

  .p-password-clear-icon {
    position: absolute;
    top: 50%;
    margin-top: -0.5rem;
    cursor: pointer;
    inset-inline-end: var(--p-form-field-padding-x);
    color: var(--p-form-field-icon-color);
  }

  .p-password:has(.p-password-toggle-mask-icon) .p-password-input {
    padding-inline-end: calc((var(--p-form-field-padding-x) * 2) + var(--p-icon-size));
  }

  .p-password:has(.p-password-toggle-mask-icon) .p-password-clear-icon {
    inset-inline-end: calc((var(--p-form-field-padding-x) * 2) + var(--p-icon-size));
  }
</style>
<style type="text/css" data-primevue-style-id="checkbox-variables">
  :root {
    --p-checkbox-icon-size: 0.875rem;
    --p-checkbox-icon-color: var(--p-form-field-color);
    --p-checkbox-icon-checked-color: var(--p-primary-contrast-color);
    --p-checkbox-icon-checked-hover-color: var(--p-primary-contrast-color);
    --p-checkbox-icon-disabled-color: var(--p-form-field-disabled-color);
    --p-checkbox-icon-lg-size: 1rem;
    --p-checkbox-icon-sm-size: 0.75rem;
    --p-checkbox-border-radius: var(--p-border-radius-sm);
    --p-checkbox-width: 1.25rem;
    --p-checkbox-height: 1.25rem;
    --p-checkbox-background: var(--p-form-field-background);
    --p-checkbox-checked-background: var(--p-primary-color);
    --p-checkbox-checked-hover-background: var(--p-primary-hover-color);
    --p-checkbox-disabled-background: var(--p-form-field-disabled-background);
    --p-checkbox-filled-background: var(--p-form-field-filled-background);
    --p-checkbox-border-color: var(--p-form-field-border-color);
    --p-checkbox-hover-border-color: var(--p-form-field-hover-border-color);
    --p-checkbox-focus-border-color: var(--p-form-field-border-color);
    --p-checkbox-checked-border-color: var(--p-primary-color);
    --p-checkbox-checked-hover-border-color: var(--p-primary-hover-color);
    --p-checkbox-checked-focus-border-color: var(--p-primary-color);
    --p-checkbox-checked-disabled-border-color: var(--p-form-field-border-color);
    --p-checkbox-invalid-border-color: var(--p-form-field-invalid-border-color);
    --p-checkbox-shadow: var(--p-form-field-shadow);
    --p-checkbox-transition-duration: var(--p-form-field-transition-duration);
    --p-checkbox-lg-width: 1.5rem;
    --p-checkbox-lg-height: 1.5rem;
    --p-checkbox-sm-width: 1rem;
    --p-checkbox-sm-height: 1rem;
    --p-checkbox-focus-ring-width: var(--p-focus-ring-width);
    --p-checkbox-focus-ring-style: var(--p-focus-ring-style);
    --p-checkbox-focus-ring-color: var(--p-focus-ring-color);
    --p-checkbox-focus-ring-offset: var(--p-focus-ring-offset);
    --p-checkbox-focus-ring-shadow: var(--p-focus-ring-shadow);
  }
</style>
<style type="text/css" data-primevue-style-id="checkbox-style">
  .p-checkbox {
    position: relative;
    display: inline-flex;
    user-select: none;
    vertical-align: bottom;
    width: var(--p-checkbox-width);
    height: var(--p-checkbox-height);
  }

  .p-checkbox-input {
    cursor: pointer;
    appearance: none;
    position: absolute;
    inset-block-start: 0;
    inset-inline-start: 0;
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
    opacity: 0;
    z-index: 1;
    outline: 0 none;
    border: 1px solid transparent;
    border-radius: var(--p-checkbox-border-radius);
  }

  .p-checkbox-box {
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: var(--p-checkbox-border-radius);
    border: 1px solid var(--p-checkbox-border-color);
    background: var(--p-checkbox-background);
    width: var(--p-checkbox-width);
    height: var(--p-checkbox-height);
    transition: background var(--p-checkbox-transition-duration), color var(--p-checkbox-transition-duration), border-color var(--p-checkbox-transition-duration), box-shadow var(--p-checkbox-transition-duration), outline-color var(--p-checkbox-transition-duration);
    outline-color: transparent;
    box-shadow: var(--p-checkbox-shadow);
  }

  .p-checkbox-icon {
    transition-duration: var(--p-checkbox-transition-duration);
    color: var(--p-checkbox-icon-color);
    font-size: var(--p-checkbox-icon-size);
    width: var(--p-checkbox-icon-size);
    height: var(--p-checkbox-icon-size);
  }

  .p-checkbox:not(.p-disabled):has(.p-checkbox-input:hover) .p-checkbox-box {
    border-color: var(--p-checkbox-hover-border-color);
  }

  .p-checkbox-checked .p-checkbox-box {
    border-color: var(--p-checkbox-checked-border-color);
    background: var(--p-checkbox-checked-background);
  }

  .p-checkbox-checked .p-checkbox-icon {
    color: var(--p-checkbox-icon-checked-color);
  }

  .p-checkbox-checked:not(.p-disabled):has(.p-checkbox-input:hover) .p-checkbox-box {
    background: var(--p-checkbox-checked-hover-background);
    border-color: var(--p-checkbox-checked-hover-border-color);
  }

  .p-checkbox-checked:not(.p-disabled):has(.p-checkbox-input:hover) .p-checkbox-icon {
    color: var(--p-checkbox-icon-checked-hover-color);
  }

  .p-checkbox:not(.p-disabled):has(.p-checkbox-input:focus-visible) .p-checkbox-box {
    border-color: var(--p-checkbox-focus-border-color);
    box-shadow: var(--p-checkbox-focus-ring-shadow);
    outline: var(--p-checkbox-focus-ring-width) var(--p-checkbox-focus-ring-style) var(--p-checkbox-focus-ring-color);
    outline-offset: var(--p-checkbox-focus-ring-offset);
  }

  .p-checkbox-checked:not(.p-disabled):has(.p-checkbox-input:focus-visible) .p-checkbox-box {
    border-color: var(--p-checkbox-checked-focus-border-color);
  }

  .p-checkbox.p-invalid>.p-checkbox-box {
    border-color: var(--p-checkbox-invalid-border-color);
  }

  .p-checkbox.p-variant-filled .p-checkbox-box {
    background: var(--p-checkbox-filled-background);
  }

  .p-checkbox-checked.p-variant-filled .p-checkbox-box {
    background: var(--p-checkbox-checked-background);
  }

  .p-checkbox-checked.p-variant-filled:not(.p-disabled):has(.p-checkbox-input:hover) .p-checkbox-box {
    background: var(--p-checkbox-checked-hover-background);
  }

  .p-checkbox.p-disabled {
    opacity: 1;
  }

  .p-checkbox.p-disabled .p-checkbox-box {
    background: var(--p-checkbox-disabled-background);
    border-color: var(--p-checkbox-checked-disabled-border-color);
  }

  .p-checkbox.p-disabled .p-checkbox-box .p-checkbox-icon {
    color: var(--p-checkbox-icon-disabled-color);
  }

  .p-checkbox-sm,
  .p-checkbox-sm .p-checkbox-box {
    width: var(--p-checkbox-sm-width);
    height: var(--p-checkbox-sm-height);
  }

  .p-checkbox-sm .p-checkbox-icon {
    font-size: var(--p-checkbox-icon-sm-size);
    width: var(--p-checkbox-icon-sm-size);
    height: var(--p-checkbox-icon-sm-size);
  }

  .p-checkbox-lg,
  .p-checkbox-lg .p-checkbox-box {
    width: var(--p-checkbox-lg-width);
    height: var(--p-checkbox-lg-height);
  }

  .p-checkbox-lg .p-checkbox-icon {
    font-size: var(--p-checkbox-icon-lg-size);
    width: var(--p-checkbox-icon-lg-size);
    height: var(--p-checkbox-icon-lg-size);
  }
</style>
<style type="text/css" data-primevue-style-id="button-variables">
  :root {
    --p-button-border-radius: var(--p-form-field-border-radius);
    --p-button-rounded-border-radius: 2rem;
    --p-button-gap: 0.5rem;
    --p-button-padding-x: var(--p-form-field-padding-x);
    --p-button-padding-y: var(--p-form-field-padding-y);
    --p-button-icon-only-width: 2.5rem;
    --p-button-raised-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    --p-button-badge-size: 1rem;
    --p-button-transition-duration: var(--p-form-field-transition-duration);
    --p-button-focus-ring-width: var(--p-focus-ring-width);
    --p-button-focus-ring-style: var(--p-focus-ring-style);
    --p-button-focus-ring-offset: var(--p-focus-ring-offset);
    --p-button-label-font-weight: 500;
    --p-button-lg-font-size: var(--p-form-field-lg-font-size);
    --p-button-lg-padding-x: var(--p-form-field-lg-padding-x);
    --p-button-lg-padding-y: var(--p-form-field-lg-padding-y);
    --p-button-lg-icon-only-width: 3rem;
    --p-button-sm-font-size: var(--p-form-field-sm-font-size);
    --p-button-sm-padding-x: var(--p-form-field-sm-padding-x);
    --p-button-sm-padding-y: var(--p-form-field-sm-padding-y);
    --p-button-sm-icon-only-width: 2rem;
    --p-button-link-color: var(--p-primary-color);
    --p-button-link-hover-color: var(--p-primary-color);
    --p-button-link-active-color: var(--p-primary-color);
    --p-button-text-plain-hover-background: var(--p-surface-50);
    --p-button-text-plain-active-background: var(--p-surface-100);
    --p-button-text-plain-color: var(--p-surface-700);
    --p-button-text-contrast-hover-background: var(--p-surface-50);
    --p-button-text-contrast-active-background: var(--p-surface-100);
    --p-button-text-contrast-color: var(--p-surface-950);
    --p-button-text-danger-hover-background: var(--p-red-50);
    --p-button-text-danger-active-background: var(--p-red-100);
    --p-button-text-danger-color: var(--p-red-500);
    --p-button-text-help-hover-background: var(--p-purple-50);
    --p-button-text-help-active-background: var(--p-purple-100);
    --p-button-text-help-color: var(--p-purple-500);
    --p-button-text-warn-hover-background: var(--p-orange-50);
    --p-button-text-warn-active-background: var(--p-orange-100);
    --p-button-text-warn-color: var(--p-orange-500);
    --p-button-text-info-hover-background: var(--p-sky-50);
    --p-button-text-info-active-background: var(--p-sky-100);
    --p-button-text-info-color: var(--p-sky-500);
    --p-button-text-success-hover-background: var(--p-green-50);
    --p-button-text-success-active-background: var(--p-green-100);
    --p-button-text-success-color: var(--p-green-500);
    --p-button-text-secondary-hover-background: var(--p-surface-50);
    --p-button-text-secondary-active-background: var(--p-surface-100);
    --p-button-text-secondary-color: var(--p-surface-500);
    --p-button-text-primary-hover-background: var(--p-primary-50);
    --p-button-text-primary-active-background: var(--p-primary-100);
    --p-button-text-primary-color: var(--p-primary-color);
    --p-button-outlined-plain-hover-background: var(--p-surface-50);
    --p-button-outlined-plain-active-background: var(--p-surface-100);
    --p-button-outlined-plain-border-color: var(--p-surface-200);
    --p-button-outlined-plain-color: var(--p-surface-700);
    --p-button-outlined-contrast-hover-background: var(--p-surface-50);
    --p-button-outlined-contrast-active-background: var(--p-surface-100);
    --p-button-outlined-contrast-border-color: var(--p-surface-700);
    --p-button-outlined-contrast-color: var(--p-surface-950);
    --p-button-outlined-danger-hover-background: var(--p-red-50);
    --p-button-outlined-danger-active-background: var(--p-red-100);
    --p-button-outlined-danger-border-color: var(--p-red-200);
    --p-button-outlined-danger-color: var(--p-red-500);
    --p-button-outlined-help-hover-background: var(--p-purple-50);
    --p-button-outlined-help-active-background: var(--p-purple-100);
    --p-button-outlined-help-border-color: var(--p-purple-200);
    --p-button-outlined-help-color: var(--p-purple-500);
    --p-button-outlined-warn-hover-background: var(--p-orange-50);
    --p-button-outlined-warn-active-background: var(--p-orange-100);
    --p-button-outlined-warn-border-color: var(--p-orange-200);
    --p-button-outlined-warn-color: var(--p-orange-500);
    --p-button-outlined-info-hover-background: var(--p-sky-50);
    --p-button-outlined-info-active-background: var(--p-sky-100);
    --p-button-outlined-info-border-color: var(--p-sky-200);
    --p-button-outlined-info-color: var(--p-sky-500);
    --p-button-outlined-success-hover-background: var(--p-green-50);
    --p-button-outlined-success-active-background: var(--p-green-100);
    --p-button-outlined-success-border-color: var(--p-green-200);
    --p-button-outlined-success-color: var(--p-green-500);
    --p-button-outlined-secondary-hover-background: var(--p-surface-50);
    --p-button-outlined-secondary-active-background: var(--p-surface-100);
    --p-button-outlined-secondary-border-color: var(--p-surface-200);
    --p-button-outlined-secondary-color: var(--p-surface-500);
    --p-button-outlined-primary-hover-background: var(--p-primary-50);
    --p-button-outlined-primary-active-background: var(--p-primary-100);
    --p-button-outlined-primary-border-color: var(--p-primary-200);
    --p-button-outlined-primary-color: var(--p-primary-color);
    --p-button-contrast-background: var(--p-surface-950);
    --p-button-contrast-hover-background: var(--p-surface-900);
    --p-button-contrast-active-background: var(--p-surface-800);
    --p-button-contrast-border-color: var(--p-surface-950);
    --p-button-contrast-hover-border-color: var(--p-surface-900);
    --p-button-contrast-active-border-color: var(--p-surface-800);
    --p-button-contrast-color: var(--p-surface-0);
    --p-button-contrast-hover-color: var(--p-surface-0);
    --p-button-contrast-active-color: var(--p-surface-0);
    --p-button-contrast-focus-ring-color: var(--p-surface-950);
    --p-button-contrast-focus-ring-shadow: none;
    --p-button-danger-background: var(--p-red-500);
    --p-button-danger-hover-background: var(--p-red-600);
    --p-button-danger-active-background: var(--p-red-700);
    --p-button-danger-border-color: var(--p-red-500);
    --p-button-danger-hover-border-color: var(--p-red-600);
    --p-button-danger-active-border-color: var(--p-red-700);
    --p-button-danger-color: #ffffff;
    --p-button-danger-hover-color: #ffffff;
    --p-button-danger-active-color: #ffffff;
    --p-button-danger-focus-ring-color: var(--p-red-500);
    --p-button-danger-focus-ring-shadow: none;
    --p-button-help-background: var(--p-purple-500);
    --p-button-help-hover-background: var(--p-purple-600);
    --p-button-help-active-background: var(--p-purple-700);
    --p-button-help-border-color: var(--p-purple-500);
    --p-button-help-hover-border-color: var(--p-purple-600);
    --p-button-help-active-border-color: var(--p-purple-700);
    --p-button-help-color: #ffffff;
    --p-button-help-hover-color: #ffffff;
    --p-button-help-active-color: #ffffff;
    --p-button-help-focus-ring-color: var(--p-purple-500);
    --p-button-help-focus-ring-shadow: none;
    --p-button-warn-background: var(--p-orange-500);
    --p-button-warn-hover-background: var(--p-orange-600);
    --p-button-warn-active-background: var(--p-orange-700);
    --p-button-warn-border-color: var(--p-orange-500);
    --p-button-warn-hover-border-color: var(--p-orange-600);
    --p-button-warn-active-border-color: var(--p-orange-700);
    --p-button-warn-color: #ffffff;
    --p-button-warn-hover-color: #ffffff;
    --p-button-warn-active-color: #ffffff;
    --p-button-warn-focus-ring-color: var(--p-orange-500);
    --p-button-warn-focus-ring-shadow: none;
    --p-button-success-background: var(--p-green-500);
    --p-button-success-hover-background: var(--p-green-600);
    --p-button-success-active-background: var(--p-green-700);
    --p-button-success-border-color: var(--p-green-500);
    --p-button-success-hover-border-color: var(--p-green-600);
    --p-button-success-active-border-color: var(--p-green-700);
    --p-button-success-color: #ffffff;
    --p-button-success-hover-color: #ffffff;
    --p-button-success-active-color: #ffffff;
    --p-button-success-focus-ring-color: var(--p-green-500);
    --p-button-success-focus-ring-shadow: none;
    --p-button-info-background: var(--p-sky-500);
    --p-button-info-hover-background: var(--p-sky-600);
    --p-button-info-active-background: var(--p-sky-700);
    --p-button-info-border-color: var(--p-sky-500);
    --p-button-info-hover-border-color: var(--p-sky-600);
    --p-button-info-active-border-color: var(--p-sky-700);
    --p-button-info-color: #ffffff;
    --p-button-info-hover-color: #ffffff;
    --p-button-info-active-color: #ffffff;
    --p-button-info-focus-ring-color: var(--p-sky-500);
    --p-button-info-focus-ring-shadow: none;
    --p-button-secondary-background: var(--p-surface-100);
    --p-button-secondary-hover-background: var(--p-surface-200);
    --p-button-secondary-active-background: var(--p-surface-300);
    --p-button-secondary-border-color: var(--p-surface-100);
    --p-button-secondary-hover-border-color: var(--p-surface-200);
    --p-button-secondary-active-border-color: var(--p-surface-300);
    --p-button-secondary-color: var(--p-surface-600);
    --p-button-secondary-hover-color: var(--p-surface-700);
    --p-button-secondary-active-color: var(--p-surface-800);
    --p-button-secondary-focus-ring-color: var(--p-surface-600);
    --p-button-secondary-focus-ring-shadow: none;
    --p-button-primary-background: var(--p-primary-color);
    --p-button-primary-hover-background: var(--p-primary-hover-color);
    --p-button-primary-active-background: var(--p-primary-active-color);
    --p-button-primary-border-color: var(--p-primary-color);
    --p-button-primary-hover-border-color: var(--p-primary-hover-color);
    --p-button-primary-active-border-color: var(--p-primary-active-color);
    --p-button-primary-color: var(--p-primary-contrast-color);
    --p-button-primary-hover-color: var(--p-primary-contrast-color);
    --p-button-primary-active-color: var(--p-primary-contrast-color);
    --p-button-primary-focus-ring-color: var(--p-primary-color);
    --p-button-primary-focus-ring-shadow: none;
  }

  .p-dark {
    --p-button-link-color: var(--p-primary-color);
    --p-button-link-hover-color: var(--p-primary-color);
    --p-button-link-active-color: var(--p-primary-color);
    --p-button-text-plain-hover-background: var(--p-surface-800);
    --p-button-text-plain-active-background: var(--p-surface-700);
    --p-button-text-plain-color: var(--p-surface-0);
    --p-button-text-contrast-hover-background: var(--p-surface-800);
    --p-button-text-contrast-active-background: var(--p-surface-700);
    --p-button-text-contrast-color: var(--p-surface-0);
    --p-button-text-danger-hover-background: color-mix(in srgb, var(--p-red-400), transparent 96%);
    --p-button-text-danger-active-background: color-mix(in srgb, var(--p-red-400), transparent 84%);
    --p-button-text-danger-color: var(--p-red-400);
    --p-button-text-help-hover-background: color-mix(in srgb, var(--p-purple-400), transparent 96%);
    --p-button-text-help-active-background: color-mix(in srgb, var(--p-purple-400), transparent 84%);
    --p-button-text-help-color: var(--p-purple-400);
    --p-button-text-warn-hover-background: color-mix(in srgb, var(--p-orange-400), transparent 96%);
    --p-button-text-warn-active-background: color-mix(in srgb, var(--p-orange-400), transparent 84%);
    --p-button-text-warn-color: var(--p-orange-400);
    --p-button-text-info-hover-background: color-mix(in srgb, var(--p-sky-400), transparent 96%);
    --p-button-text-info-active-background: color-mix(in srgb, var(--p-sky-400), transparent 84%);
    --p-button-text-info-color: var(--p-sky-400);
    --p-button-text-success-hover-background: color-mix(in srgb, var(--p-green-400), transparent 96%);
    --p-button-text-success-active-background: color-mix(in srgb, var(--p-green-400), transparent 84%);
    --p-button-text-success-color: var(--p-green-400);
    --p-button-text-secondary-hover-background: var(--p-surface-800);
    --p-button-text-secondary-active-background: var(--p-surface-700);
    --p-button-text-secondary-color: var(--p-surface-400);
    --p-button-text-primary-hover-background: color-mix(in srgb, var(--p-primary-color), transparent 96%);
    --p-button-text-primary-active-background: color-mix(in srgb, var(--p-primary-color), transparent 84%);
    --p-button-text-primary-color: var(--p-primary-color);
    --p-button-outlined-plain-hover-background: var(--p-surface-800);
    --p-button-outlined-plain-active-background: var(--p-surface-700);
    --p-button-outlined-plain-border-color: var(--p-surface-600);
    --p-button-outlined-plain-color: var(--p-surface-0);
    --p-button-outlined-contrast-hover-background: var(--p-surface-800);
    --p-button-outlined-contrast-active-background: var(--p-surface-700);
    --p-button-outlined-contrast-border-color: var(--p-surface-500);
    --p-button-outlined-contrast-color: var(--p-surface-0);
    --p-button-outlined-danger-hover-background: color-mix(in srgb, var(--p-red-400), transparent 96%);
    --p-button-outlined-danger-active-background: color-mix(in srgb, var(--p-red-400), transparent 84%);
    --p-button-outlined-danger-border-color: var(--p-red-700);
    --p-button-outlined-danger-color: var(--p-red-400);
    --p-button-outlined-help-hover-background: color-mix(in srgb, var(--p-purple-400), transparent 96%);
    --p-button-outlined-help-active-background: color-mix(in srgb, var(--p-purple-400), transparent 84%);
    --p-button-outlined-help-border-color: var(--p-purple-700);
    --p-button-outlined-help-color: var(--p-purple-400);
    --p-button-outlined-warn-hover-background: color-mix(in srgb, var(--p-orange-400), transparent 96%);
    --p-button-outlined-warn-active-background: color-mix(in srgb, var(--p-orange-400), transparent 84%);
    --p-button-outlined-warn-border-color: var(--p-orange-700);
    --p-button-outlined-warn-color: var(--p-orange-400);
    --p-button-outlined-info-hover-background: color-mix(in srgb, var(--p-sky-400), transparent 96%);
    --p-button-outlined-info-active-background: color-mix(in srgb, var(--p-sky-400), transparent 84%);
    --p-button-outlined-info-border-color: var(--p-sky-700);
    --p-button-outlined-info-color: var(--p-sky-400);
    --p-button-outlined-success-hover-background: color-mix(in srgb, var(--p-green-400), transparent 96%);
    --p-button-outlined-success-active-background: color-mix(in srgb, var(--p-green-400), transparent 84%);
    --p-button-outlined-success-border-color: var(--p-green-700);
    --p-button-outlined-success-color: var(--p-green-400);
    --p-button-outlined-secondary-hover-background: rgba(255, 255, 255, 0.04);
    --p-button-outlined-secondary-active-background: rgba(255, 255, 255, 0.16);
    --p-button-outlined-secondary-border-color: var(--p-surface-700);
    --p-button-outlined-secondary-color: var(--p-surface-400);
    --p-button-outlined-primary-hover-background: color-mix(in srgb, var(--p-primary-color), transparent 96%);
    --p-button-outlined-primary-active-background: color-mix(in srgb, var(--p-primary-color), transparent 84%);
    --p-button-outlined-primary-border-color: var(--p-primary-700);
    --p-button-outlined-primary-color: var(--p-primary-color);
    --p-button-contrast-background: var(--p-surface-0);
    --p-button-contrast-hover-background: var(--p-surface-100);
    --p-button-contrast-active-background: var(--p-surface-200);
    --p-button-contrast-border-color: var(--p-surface-0);
    --p-button-contrast-hover-border-color: var(--p-surface-100);
    --p-button-contrast-active-border-color: var(--p-surface-200);
    --p-button-contrast-color: var(--p-surface-950);
    --p-button-contrast-hover-color: var(--p-surface-950);
    --p-button-contrast-active-color: var(--p-surface-950);
    --p-button-contrast-focus-ring-color: var(--p-surface-0);
    --p-button-contrast-focus-ring-shadow: none;
    --p-button-danger-background: var(--p-red-400);
    --p-button-danger-hover-background: var(--p-red-300);
    --p-button-danger-active-background: var(--p-red-200);
    --p-button-danger-border-color: var(--p-red-400);
    --p-button-danger-hover-border-color: var(--p-red-300);
    --p-button-danger-active-border-color: var(--p-red-200);
    --p-button-danger-color: var(--p-red-950);
    --p-button-danger-hover-color: var(--p-red-950);
    --p-button-danger-active-color: var(--p-red-950);
    --p-button-danger-focus-ring-color: var(--p-red-400);
    --p-button-danger-focus-ring-shadow: none;
    --p-button-help-background: var(--p-purple-400);
    --p-button-help-hover-background: var(--p-purple-300);
    --p-button-help-active-background: var(--p-purple-200);
    --p-button-help-border-color: var(--p-purple-400);
    --p-button-help-hover-border-color: var(--p-purple-300);
    --p-button-help-active-border-color: var(--p-purple-200);
    --p-button-help-color: var(--p-purple-950);
    --p-button-help-hover-color: var(--p-purple-950);
    --p-button-help-active-color: var(--p-purple-950);
    --p-button-help-focus-ring-color: var(--p-purple-400);
    --p-button-help-focus-ring-shadow: none;
    --p-button-warn-background: var(--p-orange-400);
    --p-button-warn-hover-background: var(--p-orange-300);
    --p-button-warn-active-background: var(--p-orange-200);
    --p-button-warn-border-color: var(--p-orange-400);
    --p-button-warn-hover-border-color: var(--p-orange-300);
    --p-button-warn-active-border-color: var(--p-orange-200);
    --p-button-warn-color: var(--p-orange-950);
    --p-button-warn-hover-color: var(--p-orange-950);
    --p-button-warn-active-color: var(--p-orange-950);
    --p-button-warn-focus-ring-color: var(--p-orange-400);
    --p-button-warn-focus-ring-shadow: none;
    --p-button-success-background: var(--p-green-400);
    --p-button-success-hover-background: var(--p-green-300);
    --p-button-success-active-background: var(--p-green-200);
    --p-button-success-border-color: var(--p-green-400);
    --p-button-success-hover-border-color: var(--p-green-300);
    --p-button-success-active-border-color: var(--p-green-200);
    --p-button-success-color: var(--p-green-950);
    --p-button-success-hover-color: var(--p-green-950);
    --p-button-success-active-color: var(--p-green-950);
    --p-button-success-focus-ring-color: var(--p-green-400);
    --p-button-success-focus-ring-shadow: none;
    --p-button-info-background: var(--p-sky-400);
    --p-button-info-hover-background: var(--p-sky-300);
    --p-button-info-active-background: var(--p-sky-200);
    --p-button-info-border-color: var(--p-sky-400);
    --p-button-info-hover-border-color: var(--p-sky-300);
    --p-button-info-active-border-color: var(--p-sky-200);
    --p-button-info-color: var(--p-sky-950);
    --p-button-info-hover-color: var(--p-sky-950);
    --p-button-info-active-color: var(--p-sky-950);
    --p-button-info-focus-ring-color: var(--p-sky-400);
    --p-button-info-focus-ring-shadow: none;
    --p-button-secondary-background: var(--p-surface-800);
    --p-button-secondary-hover-background: var(--p-surface-700);
    --p-button-secondary-active-background: var(--p-surface-600);
    --p-button-secondary-border-color: var(--p-surface-800);
    --p-button-secondary-hover-border-color: var(--p-surface-700);
    --p-button-secondary-active-border-color: var(--p-surface-600);
    --p-button-secondary-color: var(--p-surface-300);
    --p-button-secondary-hover-color: var(--p-surface-200);
    --p-button-secondary-active-color: var(--p-surface-100);
    --p-button-secondary-focus-ring-color: var(--p-surface-300);
    --p-button-secondary-focus-ring-shadow: none;
    --p-button-primary-background: var(--p-primary-color);
    --p-button-primary-hover-background: var(--p-primary-hover-color);
    --p-button-primary-active-background: var(--p-primary-active-color);
    --p-button-primary-border-color: var(--p-primary-color);
    --p-button-primary-hover-border-color: var(--p-primary-hover-color);
    --p-button-primary-active-border-color: var(--p-primary-active-color);
    --p-button-primary-color: var(--p-primary-contrast-color);
    --p-button-primary-hover-color: var(--p-primary-contrast-color);
    --p-button-primary-active-color: var(--p-primary-contrast-color);
    --p-button-primary-focus-ring-color: var(--p-primary-color);
    --p-button-primary-focus-ring-shadow: none;
  }
</style>
<style type="text/css" data-primevue-style-id="button-style">
  .p-button {
    display: inline-flex;
    cursor: pointer;
    user-select: none;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    position: relative;
    color: var(--p-button-primary-color);
    background: var(--p-button-primary-background);
    border: 1px solid var(--p-button-primary-border-color);
    padding: var(--p-button-padding-y) var(--p-button-padding-x);
    font-size: 1rem;
    font-family: inherit;
    font-feature-settings: inherit;
    transition: background var(--p-button-transition-duration), color var(--p-button-transition-duration), border-color var(--p-button-transition-duration), outline-color var(--p-button-transition-duration), box-shadow var(--p-button-transition-duration);
    border-radius: var(--p-button-border-radius);
    outline-color: transparent;
    gap: var(--p-button-gap);
  }

  .p-button:disabled {
    cursor: default;
  }

  .p-button-icon-right {
    order: 1;
  }

  .p-button-icon-right:dir(rtl) {
    order: -1;
  }

  .p-button:not(.p-button-vertical) .p-button-icon:not(.p-button-icon-right):dir(rtl) {
    order: 1;
  }

  .p-button-icon-bottom {
    order: 2;
  }

  .p-button-icon-only {
    width: var(--p-button-icon-only-width);
    padding-inline-start: 0;
    padding-inline-end: 0;
    gap: 0;
  }

  .p-button-icon-only.p-button-rounded {
    border-radius: 50%;
    height: var(--p-button-icon-only-width);
  }

  .p-button-icon-only .p-button-label {
    visibility: hidden;
    width: 0;
  }

  .p-button-sm {
    font-size: var(--p-button-sm-font-size);
    padding: var(--p-button-sm-padding-y) var(--p-button-sm-padding-x);
  }

  .p-button-sm .p-button-icon {
    font-size: var(--p-button-sm-font-size);
  }

  .p-button-sm.p-button-icon-only {
    width: var(--p-button-sm-icon-only-width);
  }

  .p-button-sm.p-button-icon-only.p-button-rounded {
    height: var(--p-button-sm-icon-only-width);
  }

  .p-button-lg {
    font-size: var(--p-button-lg-font-size);
    padding: var(--p-button-lg-padding-y) var(--p-button-lg-padding-x);
  }

  .p-button-lg .p-button-icon {
    font-size: var(--p-button-lg-font-size);
  }

  .p-button-lg.p-button-icon-only {
    width: var(--p-button-lg-icon-only-width);
  }

  .p-button-lg.p-button-icon-only.p-button-rounded {
    height: var(--p-button-lg-icon-only-width);
  }

  .p-button-vertical {
    flex-direction: column;
  }

  .p-button-label {
    font-weight: var(--p-button-label-font-weight);
  }

  .p-button-fluid {
    width: 100%;
  }

  .p-button-fluid.p-button-icon-only {
    width: var(--p-button-icon-only-width);
  }

  .p-button:not(:disabled):hover {
    background: var(--p-button-primary-hover-background);
    border: 1px solid var(--p-button-primary-hover-border-color);
    color: var(--p-button-primary-hover-color);
  }

  .p-button:not(:disabled):active {
    background: var(--p-button-primary-active-background);
    border: 1px solid var(--p-button-primary-active-border-color);
    color: var(--p-button-primary-active-color);
  }

  .p-button:focus-visible {
    box-shadow: var(--p-button-primary-focus-ring-shadow);
    outline: var(--p-button-focus-ring-width) var(--p-button-focus-ring-style) var(--p-button-primary-focus-ring-color);
    outline-offset: var(--p-button-focus-ring-offset);
  }

  .p-button .p-badge {
    min-width: var(--p-button-badge-size);
    height: var(--p-button-badge-size);
    line-height: var(--p-button-badge-size);
  }

  .p-button-raised {
    box-shadow: var(--p-button-raised-shadow);
  }

  .p-button-rounded {
    border-radius: var(--p-button-rounded-border-radius);
  }

  .p-button-secondary {
    background: var(--p-button-secondary-background);
    border: 1px solid var(--p-button-secondary-border-color);
    color: var(--p-button-secondary-color);
  }

  .p-button-secondary:not(:disabled):hover {
    background: var(--p-button-secondary-hover-background);
    border: 1px solid var(--p-button-secondary-hover-border-color);
    color: var(--p-button-secondary-hover-color);
  }

  .p-button-secondary:not(:disabled):active {
    background: var(--p-button-secondary-active-background);
    border: 1px solid var(--p-button-secondary-active-border-color);
    color: var(--p-button-secondary-active-color);
  }

  .p-button-secondary:focus-visible {
    outline-color: var(--p-button-secondary-focus-ring-color);
    box-shadow: var(--p-button-secondary-focus-ring-shadow);
  }

  .p-button-success {
    background: var(--p-button-success-background);
    border: 1px solid var(--p-button-success-border-color);
    color: var(--p-button-success-color);
  }

  .p-button-success:not(:disabled):hover {
    background: var(--p-button-success-hover-background);
    border: 1px solid var(--p-button-success-hover-border-color);
    color: var(--p-button-success-hover-color);
  }

  .p-button-success:not(:disabled):active {
    background: var(--p-button-success-active-background);
    border: 1px solid var(--p-button-success-active-border-color);
    color: var(--p-button-success-active-color);
  }

  .p-button-success:focus-visible {
    outline-color: var(--p-button-success-focus-ring-color);
    box-shadow: var(--p-button-success-focus-ring-shadow);
  }

  .p-button-info {
    background: var(--p-button-info-background);
    border: 1px solid var(--p-button-info-border-color);
    color: var(--p-button-info-color);
  }

  .p-button-info:not(:disabled):hover {
    background: var(--p-button-info-hover-background);
    border: 1px solid var(--p-button-info-hover-border-color);
    color: var(--p-button-info-hover-color);
  }

  .p-button-info:not(:disabled):active {
    background: var(--p-button-info-active-background);
    border: 1px solid var(--p-button-info-active-border-color);
    color: var(--p-button-info-active-color);
  }

  .p-button-info:focus-visible {
    outline-color: var(--p-button-info-focus-ring-color);
    box-shadow: var(--p-button-info-focus-ring-shadow);
  }

  .p-button-warn {
    background: var(--p-button-warn-background);
    border: 1px solid var(--p-button-warn-border-color);
    color: var(--p-button-warn-color);
  }

  .p-button-warn:not(:disabled):hover {
    background: var(--p-button-warn-hover-background);
    border: 1px solid var(--p-button-warn-hover-border-color);
    color: var(--p-button-warn-hover-color);
  }

  .p-button-warn:not(:disabled):active {
    background: var(--p-button-warn-active-background);
    border: 1px solid var(--p-button-warn-active-border-color);
    color: var(--p-button-warn-active-color);
  }

  .p-button-warn:focus-visible {
    outline-color: var(--p-button-warn-focus-ring-color);
    box-shadow: var(--p-button-warn-focus-ring-shadow);
  }

  .p-button-help {
    background: var(--p-button-help-background);
    border: 1px solid var(--p-button-help-border-color);
    color: var(--p-button-help-color);
  }

  .p-button-help:not(:disabled):hover {
    background: var(--p-button-help-hover-background);
    border: 1px solid var(--p-button-help-hover-border-color);
    color: var(--p-button-help-hover-color);
  }

  .p-button-help:not(:disabled):active {
    background: var(--p-button-help-active-background);
    border: 1px solid var(--p-button-help-active-border-color);
    color: var(--p-button-help-active-color);
  }

  .p-button-help:focus-visible {
    outline-color: var(--p-button-help-focus-ring-color);
    box-shadow: var(--p-button-help-focus-ring-shadow);
  }

  .p-button-danger {
    background: var(--p-button-danger-background);
    border: 1px solid var(--p-button-danger-border-color);
    color: var(--p-button-danger-color);
  }

  .p-button-danger:not(:disabled):hover {
    background: var(--p-button-danger-hover-background);
    border: 1px solid var(--p-button-danger-hover-border-color);
    color: var(--p-button-danger-hover-color);
  }

  .p-button-danger:not(:disabled):active {
    background: var(--p-button-danger-active-background);
    border: 1px solid var(--p-button-danger-active-border-color);
    color: var(--p-button-danger-active-color);
  }

  .p-button-danger:focus-visible {
    outline-color: var(--p-button-danger-focus-ring-color);
    box-shadow: var(--p-button-danger-focus-ring-shadow);
  }

  .p-button-contrast {
    background: var(--p-button-contrast-background);
    border: 1px solid var(--p-button-contrast-border-color);
    color: var(--p-button-contrast-color);
  }

  .p-button-contrast:not(:disabled):hover {
    background: var(--p-button-contrast-hover-background);
    border: 1px solid var(--p-button-contrast-hover-border-color);
    color: var(--p-button-contrast-hover-color);
  }

  .p-button-contrast:not(:disabled):active {
    background: var(--p-button-contrast-active-background);
    border: 1px solid var(--p-button-contrast-active-border-color);
    color: var(--p-button-contrast-active-color);
  }

  .p-button-contrast:focus-visible {
    outline-color: var(--p-button-contrast-focus-ring-color);
    box-shadow: var(--p-button-contrast-focus-ring-shadow);
  }

  .p-button-outlined {
    background: transparent;
    border-color: var(--p-button-outlined-primary-border-color);
    color: var(--p-button-outlined-primary-color);
  }

  .p-button-outlined:not(:disabled):hover {
    background: var(--p-button-outlined-primary-hover-background);
    border-color: var(--p-button-outlined-primary-border-color);
    color: var(--p-button-outlined-primary-color);
  }

  .p-button-outlined:not(:disabled):active {
    background: var(--p-button-outlined-primary-active-background);
    border-color: var(--p-button-outlined-primary-border-color);
    color: var(--p-button-outlined-primary-color);
  }

  .p-button-outlined.p-button-secondary {
    border-color: var(--p-button-outlined-secondary-border-color);
    color: var(--p-button-outlined-secondary-color);
  }

  .p-button-outlined.p-button-secondary:not(:disabled):hover {
    background: var(--p-button-outlined-secondary-hover-background);
    border-color: var(--p-button-outlined-secondary-border-color);
    color: var(--p-button-outlined-secondary-color);
  }

  .p-button-outlined.p-button-secondary:not(:disabled):active {
    background: var(--p-button-outlined-secondary-active-background);
    border-color: var(--p-button-outlined-secondary-border-color);
    color: var(--p-button-outlined-secondary-color);
  }

  .p-button-outlined.p-button-success {
    border-color: var(--p-button-outlined-success-border-color);
    color: var(--p-button-outlined-success-color);
  }

  .p-button-outlined.p-button-success:not(:disabled):hover {
    background: var(--p-button-outlined-success-hover-background);
    border-color: var(--p-button-outlined-success-border-color);
    color: var(--p-button-outlined-success-color);
  }

  .p-button-outlined.p-button-success:not(:disabled):active {
    background: var(--p-button-outlined-success-active-background);
    border-color: var(--p-button-outlined-success-border-color);
    color: var(--p-button-outlined-success-color);
  }

  .p-button-outlined.p-button-info {
    border-color: var(--p-button-outlined-info-border-color);
    color: var(--p-button-outlined-info-color);
  }

  .p-button-outlined.p-button-info:not(:disabled):hover {
    background: var(--p-button-outlined-info-hover-background);
    border-color: var(--p-button-outlined-info-border-color);
    color: var(--p-button-outlined-info-color);
  }

  .p-button-outlined.p-button-info:not(:disabled):active {
    background: var(--p-button-outlined-info-active-background);
    border-color: var(--p-button-outlined-info-border-color);
    color: var(--p-button-outlined-info-color);
  }

  .p-button-outlined.p-button-warn {
    border-color: var(--p-button-outlined-warn-border-color);
    color: var(--p-button-outlined-warn-color);
  }

  .p-button-outlined.p-button-warn:not(:disabled):hover {
    background: var(--p-button-outlined-warn-hover-background);
    border-color: var(--p-button-outlined-warn-border-color);
    color: var(--p-button-outlined-warn-color);
  }

  .p-button-outlined.p-button-warn:not(:disabled):active {
    background: var(--p-button-outlined-warn-active-background);
    border-color: var(--p-button-outlined-warn-border-color);
    color: var(--p-button-outlined-warn-color);
  }

  .p-button-outlined.p-button-help {
    border-color: var(--p-button-outlined-help-border-color);
    color: var(--p-button-outlined-help-color);
  }

  .p-button-outlined.p-button-help:not(:disabled):hover {
    background: var(--p-button-outlined-help-hover-background);
    border-color: var(--p-button-outlined-help-border-color);
    color: var(--p-button-outlined-help-color);
  }

  .p-button-outlined.p-button-help:not(:disabled):active {
    background: var(--p-button-outlined-help-active-background);
    border-color: var(--p-button-outlined-help-border-color);
    color: var(--p-button-outlined-help-color);
  }

  .p-button-outlined.p-button-danger {
    border-color: var(--p-button-outlined-danger-border-color);
    color: var(--p-button-outlined-danger-color);
  }

  .p-button-outlined.p-button-danger:not(:disabled):hover {
    background: var(--p-button-outlined-danger-hover-background);
    border-color: var(--p-button-outlined-danger-border-color);
    color: var(--p-button-outlined-danger-color);
  }

  .p-button-outlined.p-button-danger:not(:disabled):active {
    background: var(--p-button-outlined-danger-active-background);
    border-color: var(--p-button-outlined-danger-border-color);
    color: var(--p-button-outlined-danger-color);
  }

  .p-button-outlined.p-button-contrast {
    border-color: var(--p-button-outlined-contrast-border-color);
    color: var(--p-button-outlined-contrast-color);
  }

  .p-button-outlined.p-button-contrast:not(:disabled):hover {
    background: var(--p-button-outlined-contrast-hover-background);
    border-color: var(--p-button-outlined-contrast-border-color);
    color: var(--p-button-outlined-contrast-color);
  }

  .p-button-outlined.p-button-contrast:not(:disabled):active {
    background: var(--p-button-outlined-contrast-active-background);
    border-color: var(--p-button-outlined-contrast-border-color);
    color: var(--p-button-outlined-contrast-color);
  }

  .p-button-outlined.p-button-plain {
    border-color: var(--p-button-outlined-plain-border-color);
    color: var(--p-button-outlined-plain-color);
  }

  .p-button-outlined.p-button-plain:not(:disabled):hover {
    background: var(--p-button-outlined-plain-hover-background);
    border-color: var(--p-button-outlined-plain-border-color);
    color: var(--p-button-outlined-plain-color);
  }

  .p-button-outlined.p-button-plain:not(:disabled):active {
    background: var(--p-button-outlined-plain-active-background);
    border-color: var(--p-button-outlined-plain-border-color);
    color: var(--p-button-outlined-plain-color);
  }

  .p-button-text {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-text-primary-color);
  }

  .p-button-text:not(:disabled):hover {
    background: var(--p-button-text-primary-hover-background);
    border-color: transparent;
    color: var(--p-button-text-primary-color);
  }

  .p-button-text:not(:disabled):active {
    background: var(--p-button-text-primary-active-background);
    border-color: transparent;
    color: var(--p-button-text-primary-color);
  }

  .p-button-text.p-button-secondary {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-text-secondary-color);
  }

  .p-button-text.p-button-secondary:not(:disabled):hover {
    background: var(--p-button-text-secondary-hover-background);
    border-color: transparent;
    color: var(--p-button-text-secondary-color);
  }

  .p-button-text.p-button-secondary:not(:disabled):active {
    background: var(--p-button-text-secondary-active-background);
    border-color: transparent;
    color: var(--p-button-text-secondary-color);
  }

  .p-button-text.p-button-success {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-text-success-color);
  }

  .p-button-text.p-button-success:not(:disabled):hover {
    background: var(--p-button-text-success-hover-background);
    border-color: transparent;
    color: var(--p-button-text-success-color);
  }

  .p-button-text.p-button-success:not(:disabled):active {
    background: var(--p-button-text-success-active-background);
    border-color: transparent;
    color: var(--p-button-text-success-color);
  }

  .p-button-text.p-button-info {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-text-info-color);
  }

  .p-button-text.p-button-info:not(:disabled):hover {
    background: var(--p-button-text-info-hover-background);
    border-color: transparent;
    color: var(--p-button-text-info-color);
  }

  .p-button-text.p-button-info:not(:disabled):active {
    background: var(--p-button-text-info-active-background);
    border-color: transparent;
    color: var(--p-button-text-info-color);
  }

  .p-button-text.p-button-warn {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-text-warn-color);
  }

  .p-button-text.p-button-warn:not(:disabled):hover {
    background: var(--p-button-text-warn-hover-background);
    border-color: transparent;
    color: var(--p-button-text-warn-color);
  }

  .p-button-text.p-button-warn:not(:disabled):active {
    background: var(--p-button-text-warn-active-background);
    border-color: transparent;
    color: var(--p-button-text-warn-color);
  }

  .p-button-text.p-button-help {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-text-help-color);
  }

  .p-button-text.p-button-help:not(:disabled):hover {
    background: var(--p-button-text-help-hover-background);
    border-color: transparent;
    color: var(--p-button-text-help-color);
  }

  .p-button-text.p-button-help:not(:disabled):active {
    background: var(--p-button-text-help-active-background);
    border-color: transparent;
    color: var(--p-button-text-help-color);
  }

  .p-button-text.p-button-danger {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-text-danger-color);
  }

  .p-button-text.p-button-danger:not(:disabled):hover {
    background: var(--p-button-text-danger-hover-background);
    border-color: transparent;
    color: var(--p-button-text-danger-color);
  }

  .p-button-text.p-button-danger:not(:disabled):active {
    background: var(--p-button-text-danger-active-background);
    border-color: transparent;
    color: var(--p-button-text-danger-color);
  }

  .p-button-text.p-button-contrast {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-text-contrast-color);
  }

  .p-button-text.p-button-contrast:not(:disabled):hover {
    background: var(--p-button-text-contrast-hover-background);
    border-color: transparent;
    color: var(--p-button-text-contrast-color);
  }

  .p-button-text.p-button-contrast:not(:disabled):active {
    background: var(--p-button-text-contrast-active-background);
    border-color: transparent;
    color: var(--p-button-text-contrast-color);
  }

  .p-button-text.p-button-plain {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-text-plain-color);
  }

  .p-button-text.p-button-plain:not(:disabled):hover {
    background: var(--p-button-text-plain-hover-background);
    border-color: transparent;
    color: var(--p-button-text-plain-color);
  }

  .p-button-text.p-button-plain:not(:disabled):active {
    background: var(--p-button-text-plain-active-background);
    border-color: transparent;
    color: var(--p-button-text-plain-color);
  }

  .p-button-link {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-link-color);
  }

  .p-button-link:not(:disabled):hover {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-link-hover-color);
  }

  .p-button-link:not(:disabled):hover .p-button-label {
    text-decoration: underline;
  }

  .p-button-link:not(:disabled):active {
    background: transparent;
    border-color: transparent;
    color: var(--p-button-link-active-color);
  }
</style>
  <div id="app" data-v-app="">
    <div>
      <div class="flex w-full min-h-screen bg-surface-50 dark:bg-surface-950">
        <div class="bg-surface-0 dark:bg-surface-950 w-full md:w-5/12 px-8 py-20 md:px-12 lg:px-16 flex flex-col gap-12 rounded min-h-screen justify-center">
          <div class="flex flex-col gap-4">
            <div class="flex items-center gap-4 mb-4">
              <img src="{{ asset('assets/images/logo_big.png') }}" alt="MesterMC Logo" class="" style="width: 300px;">
            </div>
            <div class="flex flex-col gap-2">
              <div class="text-surface-900 dark:text-surface-0 text-2xl font-semibold leading-tight">Regisztráció</div>
              <div class="mt-2">
                <span class="text-surface-700 dark:text-surface-200">Van már fiókod?</span>
                <a href="{{ url('/login') }}" class="text-primary-500 font-medium cursor-pointer hover:text-primary-600 ml-1">Jelentkezz be itt!</a>
              </div>
            </div>
          </div>
          <div class="flex flex-col gap-6">
            <!---->
            <div class="flex flex-col gap-2">
              <label for="username" class="text-surface-900 dark:text-surface-0 font-medium"> Minecraft felhasználónév * </label>
              <input type="text" class="p-inputtext p-component p-filled w-full p-3 rounded-md shadow-sm" data-p="" id="username" placeholder="Steve_the_Miner" data-pc-name="inputtext" pc4="" data-pc-section="root">
              <small class="text-surface-500 dark:text-surface-400"> 3-16 karakter, csak betűk, számok és aláhúzás </small>
            </div>
            <div class="flex flex-col gap-2">
              <label for="email" class="text-surface-900 dark:text-surface-0 font-medium">Email cím *</label>
              <input type="email" class="p-inputtext p-component p-filled w-full p-3 rounded-md shadow-sm" data-p="" id="email" placeholder="steve@example.com" data-pc-name="inputtext" pc5="" data-pc-section="root">
              <small class="text-surface-500 dark:text-surface-400"> Ide küldjük az értesítéseket és a fiók visszaállítási linkeket </small>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div class="flex flex-col gap-2">
                <label for="password" class="text-surface-900 dark:text-surface-0 font-medium">Jelszó *</label>
                <div class="p-password p-component p-inputwrapper w-full p-invalid" data-p="" id="password" data-pc-name="password" pc6="" data-pc-section="root">
                  <input type="password" class="p-inputtext p-component p-password-input" data-p="" id="pv_id_7" aria-controls="password_overlay" aria-haspopup="true" placeholder="••••••••" data-p-has-e-icon="true" data-pc-name="pcinputtext" data-pc-extend="inputtext" pc7="" data-pc-section="root">
                  <!---->
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="p-icon p-password-toggle-mask-icon p-password-unmask-icon" aria-hidden="true" data-pc-section="unmaskicon">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0535499 7.25213C0.208567 7.59162 2.40413 12.4 7 12.4C11.5959 12.4 13.7914 7.59162 13.9465 7.25213C13.9487 7.2471 13.9506 7.24304 13.952 7.24001C13.9837 7.16396 14 7.08239 14 7.00001C14 6.91762 13.9837 6.83605 13.952 6.76001C13.9506 6.75697 13.9487 6.75292 13.9465 6.74788C13.7914 6.4084 11.5959 1.60001 7 1.60001C2.40413 1.60001 0.208567 6.40839 0.0535499 6.74788C0.0512519 6.75292 0.0494023 6.75697 0.048 6.76001C0.0163137 6.83605 0 6.91762 0 7.00001C0 7.08239 0.0163137 7.16396 0.048 7.24001C0.0494023 7.24304 0.0512519 7.2471 0.0535499 7.25213ZM7 11.2C3.664 11.2 1.736 7.92001 1.264 7.00001C1.736 6.08001 3.664 2.80001 7 2.80001C10.336 2.80001 12.264 6.08001 12.736 7.00001C12.264 7.92001 10.336 11.2 7 11.2ZM5.55551 9.16182C5.98308 9.44751 6.48576 9.6 7 9.6C7.68891 9.59789 8.349 9.32328 8.83614 8.83614C9.32328 8.349 9.59789 7.68891 9.59999 7C9.59999 6.48576 9.44751 5.98308 9.16182 5.55551C8.87612 5.12794 8.47006 4.7947 7.99497 4.59791C7.51988 4.40112 6.99711 4.34963 6.49276 4.44995C5.98841 4.55027 5.52513 4.7979 5.16152 5.16152C4.7979 5.52513 4.55027 5.98841 4.44995 6.49276C4.34963 6.99711 4.40112 7.51988 4.59791 7.99497C4.7947 8.47006 5.12794 8.87612 5.55551 9.16182ZM6.2222 5.83594C6.45243 5.6821 6.7231 5.6 7 5.6C7.37065 5.6021 7.72553 5.75027 7.98762 6.01237C8.24972 6.27446 8.39789 6.62934 8.4 7C8.4 7.27689 8.31789 7.54756 8.16405 7.77779C8.01022 8.00802 7.79157 8.18746 7.53575 8.29343C7.27994 8.39939 6.99844 8.42711 6.72687 8.37309C6.4553 8.31908 6.20584 8.18574 6.01005 7.98994C5.81425 7.79415 5.68091 7.54469 5.6269 7.27312C5.57288 7.00155 5.6006 6.72006 5.70656 6.46424C5.81253 6.20842 5.99197 5.98977 6.2222 5.83594Z" fill="currentColor"></path>
                  </svg>
                  <span class="p-hidden-accessible" aria-live="polite" data-pc-section="hiddenaccesible" data-p-hidden-accessible="true">Enter a password</span>
                </div>
                <small class="text-red-500">A jelszó kötelező</small>
              </div>
              <div class="flex flex-col gap-2">
                <label for="confirmPassword" class="text-surface-900 dark:text-surface-0 font-medium">Jelszó megerősítés *</label>
                <div class="p-password p-component p-inputwrapper w-full" data-p="" id="confirmPassword" data-pc-name="password" pc9="" data-pc-section="root">
                  <input type="password" class="p-inputtext p-component p-password-input" data-p="" id="pv_id_10" aria-controls="confirmPassword_overlay" aria-haspopup="true" placeholder="••••••••" data-p-has-e-icon="true" data-pc-name="pcinputtext" data-pc-extend="inputtext" pc10="" data-pc-section="root">
                  <!---->
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="p-icon p-password-toggle-mask-icon p-password-unmask-icon" aria-hidden="true" data-pc-section="unmaskicon">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0535499 7.25213C0.208567 7.59162 2.40413 12.4 7 12.4C11.5959 12.4 13.7914 7.59162 13.9465 7.25213C13.9487 7.2471 13.9506 7.24304 13.952 7.24001C13.9837 7.16396 14 7.08239 14 7.00001C14 6.91762 13.9837 6.83605 13.952 6.76001C13.9506 6.75697 13.9487 6.75292 13.9465 6.74788C13.7914 6.4084 11.5959 1.60001 7 1.60001C2.40413 1.60001 0.208567 6.40839 0.0535499 6.74788C0.0512519 6.75292 0.0494023 6.75697 0.048 6.76001C0.0163137 6.83605 0 6.91762 0 7.00001C0 7.08239 0.0163137 7.16396 0.048 7.24001C0.0494023 7.24304 0.0512519 7.2471 0.0535499 7.25213ZM7 11.2C3.664 11.2 1.736 7.92001 1.264 7.00001C1.736 6.08001 3.664 2.80001 7 2.80001C10.336 2.80001 12.264 6.08001 12.736 7.00001C12.264 7.92001 10.336 11.2 7 11.2ZM5.55551 9.16182C5.98308 9.44751 6.48576 9.6 7 9.6C7.68891 9.59789 8.349 9.32328 8.83614 8.83614C9.32328 8.349 9.59789 7.68891 9.59999 7C9.59999 6.48576 9.44751 5.98308 9.16182 5.55551C8.87612 5.12794 8.47006 4.7947 7.99497 4.59791C7.51988 4.40112 6.99711 4.34963 6.49276 4.44995C5.98841 4.55027 5.52513 4.7979 5.16152 5.16152C4.7979 5.52513 4.55027 5.98841 4.44995 6.49276C4.34963 6.99711 4.40112 7.51988 4.59791 7.99497C4.7947 8.47006 5.12794 8.87612 5.55551 9.16182ZM6.2222 5.83594C6.45243 5.6821 6.7231 5.6 7 5.6C7.37065 5.6021 7.72553 5.75027 7.98762 6.01237C8.24972 6.27446 8.39789 6.62934 8.4 7C8.4 7.27689 8.31789 7.54756 8.16405 7.77779C8.01022 8.00802 7.79157 8.18746 7.53575 8.29343C7.27994 8.39939 6.99844 8.42711 6.72687 8.37309C6.4553 8.31908 6.20584 8.18574 6.01005 7.98994C5.81425 7.79415 5.68091 7.54469 5.6269 7.27312C5.57288 7.00155 5.6006 6.72006 5.70656 6.46424C5.81253 6.20842 5.99197 5.98977 6.2222 5.83594Z" fill="currentColor"></path>
                  </svg>
                  <span class="p-hidden-accessible" aria-live="polite" data-pc-section="hiddenaccesible" data-p-hidden-accessible="true">Enter a password</span>
                </div>
                <!---->
              </div>
            </div>
            <div class="flex flex-col gap-3 p-4 border border-surface-200 dark:border-surface-700 rounded-md bg-surface-50 dark:bg-surface-900">
              <div class="flex flex-col gap-2">
                <div class="flex items-start gap-2">
                  <div class="p-checkbox p-component" id="acceptTerms" data-pc-name="checkbox" pc12="" data-pc-section="root" data-p-checked="false" data-p-disabled="false" data-p="">
                    <input type="checkbox" class="p-checkbox-input" data-pc-section="input">
                    <div class="p-checkbox-box" data-pc-section="box" data-p="">
                      <!---->
                    </div>
                  </div>
                  <label for="acceptTerms" class="text-surface-900 dark:text-surface-0 text-sm leading-relaxed"> Elolvastam és elfogadom az <a href="https://drive.google.com/file/d/1Vvd75LT_vgtUclv6Ron6KigGa2f8TfIS/view?usp=sharing" target="_blank" class="text-primary-500 hover:text-primary-600 underline">Általános Szerződési Feltételeket</a>. </label>
                </div>
                <!---->
              </div>
              <div class="flex flex-col gap-2">
                <div class="flex items-start gap-2">
                  <div class="p-checkbox p-component" id="acceptPrivacy" data-pc-name="checkbox" pc13="" data-pc-section="root" data-p-checked="false" data-p-disabled="false" data-p="">
                    <input type="checkbox" class="p-checkbox-input" data-pc-section="input">
                    <div class="p-checkbox-box" data-pc-section="box" data-p="">
                      <!---->
                    </div>
                  </div>
                  <label for="acceptPrivacy" class="text-surface-900 dark:text-surface-0 text-sm leading-relaxed"> Elolvastam és elfogadom az <a href="https://drive.google.com/file/d/1zIVj7nlkIdG9AF0Re8rKstW_OMlffbvL/view?usp=sharing" target="_blank" class="text-primary-500 hover:text-primary-600 underline">Adatvédelmi Tájékoztatóban</a> foglaltakat, a személyes adataim hozzájárulással történő kezeléséhez kifejezetten hozzájárulok. </label>
                </div>
                <!---->
              </div>
              <div class="flex items-start gap-2">
                <div class="p-checkbox p-component" id="newsletter" data-pc-name="checkbox" pc14="" data-pc-section="root" data-p-checked="false" data-p-disabled="false" data-p="">
                  <input type="checkbox" class="p-checkbox-input" data-pc-section="input">
                  <div class="p-checkbox-box" data-pc-section="box" data-p="">
                    <!---->
                  </div>
                </div>
                <label for="newsletter" class="text-surface-700 dark:text-surface-300 text-sm leading-relaxed"> Szeretnék hírleveleket kapni. (opcionális) </label>
              </div>
              <div class="flex items-start gap-2">
                <div class="p-checkbox p-component" id="edmNewsletter" data-pc-name="checkbox" pc15="" data-pc-section="root" data-p-checked="false" data-p-disabled="false" data-p="">
                  <input type="checkbox" class="p-checkbox-input" data-pc-section="input">
                  <div class="p-checkbox-box" data-pc-section="box" data-p="">
                    <!---->
                  </div>
                </div>
                <label for="edmNewsletter" class="text-surface-700 dark:text-surface-300 text-sm leading-relaxed"> Kifejezetten hozzájárulok, hogy eDM hírlevelet küldjenek számomra. (opcionális) </label>
              </div>
              <div class="flex flex-col gap-2">
                <div class="flex items-start gap-2">
                  <div class="p-checkbox p-component" id="ageConfirmation" data-pc-name="checkbox" pc16="" data-pc-section="root" data-p-checked="false" data-p-disabled="false" data-p="">
                    <input type="checkbox" class="p-checkbox-input" data-pc-section="input">
                    <div class="p-checkbox-box" data-pc-section="box" data-p="">
                      <!---->
                    </div>
                  </div>
                  <label for="ageConfirmation" class="text-surface-900 dark:text-surface-0 text-sm leading-relaxed"> Kijelentem, hogy a regisztrációhoz előírt 16. életévemet betöltöttem. </label>
                </div>
                <!---->
              </div>
            </div>
          </div>
          <div>
            <button class="p-button p-component w-full !px-12 !py-3" data-p="" type="button" disabled="disabled" aria-label="Fiók létrehozása" data-pc-name="button" data-p-disabled="true" pc17="" data-pc-section="root">
              <!---->
              <span class="p-button-label" data-pc-section="label" data-p="">Fiók létrehozása</span>
              <!---->
            </button>
          </div>
          <div class="text-center">
            <p class="text-surface-500 dark:text-surface-400 text-sm"> A regisztrációval elfogadod, hogy betartod a szerver szabályait és tiszteletben tartod a közösségi irányelveket. </p>
          </div>
        </div>
        <div data-v-37701dd6="" class="hidden md:block w-7/12 relative overflow-hidden minecraft-bg">
          <div data-v-37701dd6="" class="absolute inset-0 bg-black/20"></div>
        </div>
      </div>
    </div>
  </div>
  <div data-v-3d82c9b6="" class="fixed top-4 right-4 z-50 space-y-2">
    <div data-v-3d82c9b6=""></div>
  </div>
  <div data-v-3d82c9b6="" class="fixed top-4 right-4 z-50 space-y-2">
    <div data-v-3d82c9b6=""></div>
  </div>
@endsection
