<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onboarding — Motoclick</title>
    <meta name="description" content="Portal de integración comercial Motoclick. Completa el formulario para comenzar tu onboarding.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        /* ═══════════════════ RESET & BASE ═══════════════════ */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --primary: #FE7314;
            --primary-dark: #e05f05;
            --primary-light: #ff9a52;
            --secondary: #EA9545;
            --light: #FBF3E4;
            --dark: #381E0C;
            --dark-soft: #5a3a22;
            --white: #ffffff;
            --gray-50: #fafaf9;
            --gray-100: #f5f5f4;
            --gray-200: #e7e5e4;
            --gray-300: #d6d3d1;
            --gray-400: #a8a29e;
            --gray-500: #78716c;
            --gray-600: #57534e;
            --radius: 12px;
            --shadow-sm: 0 1px 3px rgba(56,30,12,.08);
            --shadow-md: 0 4px 20px rgba(56,30,12,.1);
            --shadow-lg: 0 10px 40px rgba(56,30,12,.12);
            --shadow-xl: 0 20px 60px rgba(56,30,12,.15);
        }
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: var(--light);
            color: var(--dark);
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
        }

        /* ═══════════════════ HERO HEADER ═══════════════════ */
        .hero {
            position: relative;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 50%, #c94e00 100%);
            padding: 3rem 1.5rem 5rem;
            text-align: center;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 20% 50%, rgba(255,255,255,.12) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,255,255,.08) 0%, transparent 40%);
            pointer-events: none;
        }
        .hero::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            right: 0;
            height: 60px;
            background: var(--light);
            clip-path: ellipse(55% 100% at 50% 100%);
        }
        .hero-logo {
            width: 100px;
            height: 100px;
            border-radius: 20px;
            object-fit: cover;
            box-shadow: 0 8px 30px rgba(0,0,0,.2);
            margin-bottom: 1rem;
            border: 3px solid rgba(255,255,255,.3);
        }
        .hero h1 {
            color: var(--white);
            font-size: 1.75rem;
            font-weight: 800;
            letter-spacing: -0.02em;
            margin-bottom: .5rem;
        }
        .hero p {
            color: rgba(255,255,255,.85);
            font-size: .95rem;
            font-weight: 400;
        }

        /* ═══════════════════ LANGUAGE TOGGLE ═══════════════════ */
        .lang-toggle-wrapper {
            position: absolute;
            top: 1.25rem;
            right: 1.5rem;
            z-index: 20;
        }
        .lang-toggle {
            display: flex;
            background: rgba(255,255,255,.18);
            border-radius: 20px;
            padding: 3px;
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,.2);
        }
        .lang-btn {
            padding: .4rem .9rem;
            border-radius: 17px;
            border: none;
            background: transparent;
            color: rgba(255,255,255,.7);
            font-size: .78rem;
            font-weight: 700;
            font-family: inherit;
            cursor: pointer;
            transition: all .25s ease;
            letter-spacing: .03em;
        }
        .lang-btn.active {
            background: var(--white);
            color: var(--primary-dark);
            box-shadow: 0 2px 8px rgba(0,0,0,.15);
        }
        .lang-btn:not(.active):hover {
            color: white;
            background: rgba(255,255,255,.1);
        }

        /* ═══════════════════ MAIN CONTAINER ═══════════════════ */
        .main-container {
            max-width: 860px;
            margin: -2rem auto 3rem;
            padding: 0 1rem;
            position: relative;
            z-index: 10;
        }

        /* ═══════════════════ PROGRESS BAR ═══════════════════ */
        .progress-container {
            background: var(--white);
            border-radius: 16px;
            padding: 1.5rem 2rem;
            box-shadow: var(--shadow-md);
            margin-bottom: 1.5rem;
        }
        .progress-steps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }
        .progress-line {
            position: absolute;
            top: 18px;
            left: 30px;
            right: 30px;
            height: 3px;
            background: var(--gray-200);
            border-radius: 2px;
            z-index: 0;
        }
        .progress-line-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            border-radius: 2px;
            transition: width .5s cubic-bezier(.4,0,.2,1);
            width: 0%;
        }
        .step-indicator {
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1;
            cursor: default;
        }
        .step-circle {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--gray-200);
            color: var(--gray-500);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .8rem;
            font-weight: 700;
            transition: all .4s cubic-bezier(.4,0,.2,1);
            border: 3px solid transparent;
        }
        .step-indicator.active .step-circle {
            background: var(--primary);
            color: var(--white);
            border-color: rgba(254,115,20,.3);
            box-shadow: 0 0 0 6px rgba(254,115,20,.12);
            transform: scale(1.1);
        }
        .step-indicator.completed .step-circle {
            background: #22c55e;
            color: var(--white);
            border-color: rgba(34,197,94,.2);
        }
        .step-indicator.completed .step-circle::after {
            content: '✓';
            font-size: .85rem;
        }
        .step-indicator.completed .step-number { display: none; }
        .step-label {
            font-size: .65rem;
            font-weight: 600;
            color: var(--gray-400);
            margin-top: .5rem;
            text-transform: uppercase;
            letter-spacing: .04em;
            text-align: center;
            max-width: 80px;
            transition: color .3s;
        }
        .step-indicator.active .step-label,
        .step-indicator.completed .step-label { color: var(--dark); }

        /* ═══════════════════ FORM CARD ═══════════════════ */
        .form-card {
            background: var(--white);
            border-radius: 16px;
            box-shadow: var(--shadow-lg);
            overflow: hidden;
        }
        .form-card-header {
            padding: 2rem 2rem 0;
        }
        .form-card-header h2 {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: .6rem;
        }
        .form-card-header h2 .icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            flex-shrink: 0;
        }
        .form-card-header p {
            color: var(--gray-500);
            font-size: .875rem;
            margin-top: .4rem;
            padding-left: calc(38px + .6rem);
        }

        /* ═══════════════════ FORM STEPS ═══════════════════ */
        .form-step {
            display: none;
            padding: 1.5rem 2rem 2rem;
            animation: fadeSlideIn .4s ease-out;
        }
        .form-step.active { display: block; }
        @keyframes fadeSlideIn {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ═══════════════════ FORM GRID ═══════════════════ */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.25rem;
        }
        @media (min-width: 640px) {
            .form-grid { grid-template-columns: repeat(2, 1fr); }
            .form-grid .full-width { grid-column: 1 / -1; }
        }

        /* ═══════════════════ FORM GROUP ═══════════════════ */
        .form-group { position: relative; }
        .form-group label {
            display: block;
            font-size: .8rem;
            font-weight: 600;
            color: var(--dark-soft);
            margin-bottom: .4rem;
            letter-spacing: .01em;
        }
        .form-group label .req { color: var(--primary); margin-left: 2px; }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: .75rem 1rem;
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius);
            font-size: .875rem;
            font-family: inherit;
            color: var(--dark);
            background: var(--gray-50);
            transition: all .25s ease;
            outline: none;
        }
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--primary);
            background: var(--white);
            box-shadow: 0 0 0 3px rgba(254,115,20,.1);
        }
        .form-group input::placeholder,
        .form-group textarea::placeholder { color: var(--gray-400); }
        .form-group textarea { resize: vertical; min-height: 80px; }
        .form-group select { cursor: pointer; appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%2378716c' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L3 6h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 1rem center;
        }

        /* ═══════════════════ CHECKBOX / RADIO GROUPS ═══════════════════ */
        .option-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: .75rem;
        }
        .option-card {
            display: flex;
            align-items: center;
            gap: .65rem;
            padding: .75rem 1rem;
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius);
            background: var(--gray-50);
            cursor: pointer;
            transition: all .25s ease;
            font-size: .85rem;
            font-weight: 500;
            color: var(--dark-soft);
        }
        .option-card:hover {
            border-color: var(--primary-light);
            background: #fff7f0;
        }
        .option-card input { display: none; }
        .option-card input:checked + .option-check {
            background: var(--primary);
            border-color: var(--primary);
        }
        .option-card input:checked + .option-check::after { opacity: 1; }
        .option-card:has(input:checked) {
            border-color: var(--primary);
            background: #fff7f0;
            box-shadow: 0 0 0 3px rgba(254,115,20,.08);
        }
        .option-check {
            width: 20px;
            height: 20px;
            border: 2px solid var(--gray-300);
            border-radius: 5px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all .2s;
            position: relative;
        }
        .option-check::after {
            content: '✓';
            color: white;
            font-size: .7rem;
            font-weight: 700;
            opacity: 0;
            transition: opacity .2s;
        }
        input[type="radio"] + .option-check { border-radius: 50%; }
        input[type="radio"] + .option-check::after { content: ''; width: 8px; height: 8px; background: white; border-radius: 50%; }

        /* ═══════════════════ YES/NO TOGGLE ═══════════════════ */
        .toggle-group {
            display: flex;
            gap: .5rem;
        }
        .toggle-btn {
            flex: 1;
            padding: .65rem;
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius);
            background: var(--gray-50);
            text-align: center;
            cursor: pointer;
            font-size: .85rem;
            font-weight: 600;
            color: var(--gray-500);
            transition: all .25s;
        }
        .toggle-btn:hover { border-color: var(--primary-light); }
        .toggle-btn input { display: none; }
        .toggle-btn:has(input:checked) {
            border-color: var(--primary);
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--white);
            box-shadow: 0 4px 12px rgba(254,115,20,.25);
        }

        /* ═══════════════════ SECTION DIVIDER ═══════════════════ */
        .section-divider {
            font-size: .75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--gray-400);
            padding: .75rem 0 .25rem;
            border-bottom: 1px dashed var(--gray-200);
            margin-top: .5rem;
        }

        /* ═══════════════════ BUTTONS ═══════════════════ */
        .form-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 2rem;
            border-top: 1px solid var(--gray-100);
            background: var(--gray-50);
        }
        .btn {
            padding: .8rem 2rem;
            border-radius: var(--radius);
            font-size: .9rem;
            font-weight: 600;
            font-family: inherit;
            cursor: pointer;
            border: none;
            transition: all .3s cubic-bezier(.4,0,.2,1);
            display: inline-flex;
            align-items: center;
            gap: .5rem;
        }
        .btn-back {
            background: var(--white);
            color: var(--gray-600);
            border: 1.5px solid var(--gray-300);
        }
        .btn-back:hover { background: var(--gray-100); border-color: var(--gray-400); }
        .btn-next {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            box-shadow: 0 4px 15px rgba(254,115,20,.3);
        }
        .btn-next:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(254,115,20,.4);
        }
        .btn-next:active { transform: translateY(0); }
        .btn-submit {
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(34,197,94,.3);
            padding: .9rem 2.5rem;
            font-size: .95rem;
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(34,197,94,.4);
        }

        /* ═══════════════════ CREDENTIALS TABLE ═══════════════════ */
        .cred-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius);
            overflow: hidden;
            font-size: .85rem;
        }
        .cred-table th {
            background: var(--gray-100);
            padding: .65rem .75rem;
            font-weight: 600;
            color: var(--dark-soft);
            text-align: left;
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: .04em;
        }
        .cred-table td { padding: .5rem .75rem; border-top: 1px solid var(--gray-100); }
        .cred-table td input {
            width: 100%;
            padding: .5rem .65rem;
            border: 1px solid var(--gray-200);
            border-radius: 8px;
            font-size: .8rem;
            font-family: inherit;
            background: var(--gray-50);
            outline: none;
            transition: border .2s;
        }
        .cred-table td input:focus { border-color: var(--primary); }
        .cred-table .platform-name { font-weight: 600; color: var(--dark); white-space: nowrap; }

        /* ═══════════════════ RESPONSIVE ═══════════════════ */
        @media (max-width: 639px) {
            .hero { padding: 2rem 1rem 4rem; }
            .hero h1 { font-size: 1.35rem; }
            .progress-container { padding: 1rem; overflow-x: auto; }
            .step-label { font-size: .55rem; max-width: 50px; }
            .step-circle { width: 30px; height: 30px; font-size: .7rem; }
            .form-step { padding: 1.25rem; }
            .form-nav { padding: 1rem 1.25rem; }
            .form-card-header { padding: 1.5rem 1.25rem 0; }
            .form-card-header p { padding-left: 0; }
            .option-grid { grid-template-columns: 1fr 1fr; }
            .btn { padding: .7rem 1.2rem; font-size: .82rem; }
        }

        /* ═══════════════════ FLOATING STEP COUNTER ═══════════════════ */
        .step-counter {
            text-align: center;
            font-size: .78rem;
            color: var(--gray-400);
            font-weight: 500;
        }
        .step-counter strong { color: var(--primary); }

        /* ═══════════════════ LUCIDE ICONS ═══════════════════ */
        .form-card-header h2 .icon { line-height: 0; }
        .form-card-header h2 .icon svg { width: 20px; height: 20px; stroke: white; stroke-width: 2.5; }

        /* ═══════════════════ SAVE TOAST ═══════════════════ */
        .save-toast {
            position: fixed;
            bottom: 1.5rem;
            right: 1.5rem;
            background: var(--dark);
            color: var(--white);
            padding: .6rem 1.2rem;
            border-radius: 10px;
            font-size: .8rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: .5rem;
            box-shadow: var(--shadow-lg);
            opacity: 0;
            transform: translateY(12px);
            transition: all .35s cubic-bezier(.4,0,.2,1);
            pointer-events: none;
            z-index: 100;
        }
        .save-toast.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .save-toast svg { width: 16px; height: 16px; stroke: #22c55e; }

        /* ═══════════════════ CLEAR DATA LINK ═══════════════════ */
        .clear-data {
            font-size: .75rem;
            color: var(--gray-400);
            cursor: pointer;
            text-decoration: underline;
            text-underline-offset: 2px;
            transition: color .2s;
            border: none;
            background: none;
            font-family: inherit;
        }
        .clear-data:hover { color: var(--primary); }

        /* ═══════════════════ SCHEDULE MODAL ═══════════════════ */
        .schedule-overlay {
            position: fixed;
            inset: 0;
            background: rgba(56,30,12,.45);
            backdrop-filter: blur(4px);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity .3s ease;
            padding: 1rem;
        }
        .schedule-overlay.open {
            opacity: 1;
            pointer-events: auto;
        }
        .schedule-modal {
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow-xl);
            width: 100%;
            max-width: 560px;
            max-height: 90vh;
            overflow-y: auto;
            transform: translateY(20px) scale(.97);
            transition: transform .35s cubic-bezier(.4,0,.2,1);
        }
        .schedule-overlay.open .schedule-modal {
            transform: translateY(0) scale(1);
        }
        .schedule-modal-header {
            padding: 1.5rem 1.75rem 1rem;
            border-bottom: 1px solid var(--gray-100);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .schedule-modal-header h3 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: .5rem;
        }
        .schedule-modal-header h3 .sched-icon {
            width: 34px; height: 34px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            display: flex; align-items: center; justify-content: center;
        }
        .schedule-modal-header h3 .sched-icon svg { width: 18px; height: 18px; stroke: white; stroke-width: 2.5; }
        .schedule-close-btn {
            width: 32px; height: 32px;
            border-radius: 8px;
            border: none;
            background: var(--gray-100);
            cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            transition: background .2s;
            color: var(--gray-500);
        }
        .schedule-close-btn:hover { background: var(--gray-200); }
        .schedule-modal-body { padding: 1rem 1.75rem 1.25rem; }
        .schedule-day-row {
            display: flex;
            align-items: center;
            gap: .75rem;
            padding: .7rem 0;
            border-bottom: 1px solid var(--gray-100);
        }
        .schedule-day-row:last-child { border-bottom: none; }
        .day-toggle {
            position: relative;
            width: 42px; height: 24px;
            flex-shrink: 0;
        }
        .day-toggle input { display: none; }
        .day-toggle-track {
            position: absolute; inset: 0;
            background: var(--gray-200);
            border-radius: 12px;
            cursor: pointer;
            transition: background .25s;
        }
        .day-toggle-track::after {
            content: '';
            position: absolute;
            top: 3px; left: 3px;
            width: 18px; height: 18px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 1px 3px rgba(0,0,0,.15);
            transition: transform .25s cubic-bezier(.4,0,.2,1);
        }
        .day-toggle input:checked + .day-toggle-track {
            background: var(--primary);
        }
        .day-toggle input:checked + .day-toggle-track::after {
            transform: translateX(18px);
        }
        .day-name {
            font-size: .85rem;
            font-weight: 600;
            color: var(--dark);
            min-width: 80px;
        }
        .day-name.inactive { color: var(--gray-400); text-decoration: line-through; }
        .day-times {
            display: flex;
            align-items: center;
            gap: .4rem;
            flex: 1;
            justify-content: flex-end;
        }
        .day-times.hidden { display: none; }
        .day-times select {
            padding: .4rem .5rem;
            border: 1.5px solid var(--gray-200);
            border-radius: 8px;
            font-size: .78rem;
            font-family: inherit;
            color: var(--dark);
            background: var(--gray-50);
            outline: none;
            cursor: pointer;
            transition: border .2s;
            appearance: none;
            min-width: 90px;
            text-align: center;
        }
        .day-times select:focus { border-color: var(--primary); }
        .day-times .time-sep {
            font-size: .75rem;
            color: var(--gray-400);
            font-weight: 600;
        }
        .day-closed-label {
            font-size: .78rem;
            color: var(--gray-400);
            font-style: italic;
            flex: 1;
            text-align: right;
        }
        .schedule-modal-footer {
            padding: 1rem 1.75rem 1.5rem;
            border-top: 1px solid var(--gray-100);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: .75rem;
            flex-wrap: wrap;
        }
        .btn-apply-all {
            padding: .55rem 1rem;
            border-radius: 8px;
            border: 1.5px solid var(--gray-300);
            background: var(--white);
            color: var(--dark-soft);
            font-size: .78rem;
            font-weight: 600;
            font-family: inherit;
            cursor: pointer;
            transition: all .2s;
            display: flex; align-items: center; gap: .35rem;
        }
        .btn-apply-all:hover { border-color: var(--primary); color: var(--primary); }
        .schedule-modal-actions {
            display: flex;
            gap: .5rem;
        }
        .btn-sched-cancel {
            padding: .6rem 1.25rem;
            border-radius: var(--radius);
            border: 1.5px solid var(--gray-300);
            background: var(--white);
            color: var(--gray-600);
            font-size: .85rem;
            font-weight: 600;
            font-family: inherit;
            cursor: pointer;
            transition: all .2s;
        }
        .btn-sched-cancel:hover { background: var(--gray-100); }
        .btn-sched-save {
            padding: .6rem 1.5rem;
            border-radius: var(--radius);
            border: none;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            font-size: .85rem;
            font-weight: 600;
            font-family: inherit;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(254,115,20,.25);
            transition: all .2s;
        }
        .btn-sched-save:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(254,115,20,.35);
        }
        .hours-picker-input {
            cursor: pointer !important;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='none' stroke='%23FE7314' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' viewBox='0 0 24 24'%3E%3Ccircle cx='12' cy='12' r='10'/%3E%3Cpolyline points='12 6 12 12 16 14'/%3E%3C/svg%3E") !important;
            background-repeat: no-repeat !important;
            background-position: right 1rem center !important;
            padding-right: 2.5rem !important;
        }
        .hours-picker-input:hover {
            border-color: var(--primary-light) !important;
            background-color: #fff7f0 !important;
        }
        @media (max-width: 500px) {
            .schedule-modal-body { padding: .75rem 1rem; }
            .schedule-modal-header, .schedule-modal-footer { padding-left: 1rem; padding-right: 1rem; }
            .day-name { min-width: 55px; font-size: .78rem; }
            .day-times select { min-width: 75px; font-size: .72rem; padding: .35rem .4rem; }
            .schedule-modal-footer { flex-direction: column; }
            .schedule-modal-actions { width: 100%; }
            .schedule-modal-actions button { flex: 1; }
        }
    </style>
</head>
<body>

    <!-- ═══════════════════ HERO ═══════════════════ -->
    <header class="hero">
        <div class="lang-toggle-wrapper">
            <div class="lang-toggle">
                <button type="button" class="lang-btn active" data-lang="en" onclick="switchLang('en')">EN</button>
                <button type="button" class="lang-btn" data-lang="es" onclick="switchLang('es')">ES</button>
            </div>
        </div>
        <img src="{{ asset('images/logo-motoclick.png') }}" alt="Motoclick" class="hero-logo">
        <h1 data-i18n="hero_title">Commercial Integration Portal</h1>
        <p data-i18n="hero_subtitle">Complete the form to begin your onboarding process</p>
    </header>

    <div class="main-container">

        <!-- ═══════════════════ PROGRESS ═══════════════════ -->
        <div class="progress-container">
            <div class="progress-steps">
                <div class="progress-line"><div class="progress-line-fill" id="progressFill"></div></div>
                <div class="step-indicator active" data-step="1">
                    <div class="step-circle"><span class="step-number">1</span></div>
                    <span class="step-label" data-i18n="step_business">Business</span>
                </div>
                <div class="step-indicator" data-step="2">
                    <div class="step-circle"><span class="step-number">2</span></div>
                    <span class="step-label" data-i18n="step_operations">Operations</span>
                </div>
                <div class="step-indicator" data-step="3">
                    <div class="step-circle"><span class="step-number">3</span></div>
                    <span class="step-label" data-i18n="step_channels">Channels</span>
                </div>
                <div class="step-indicator" data-step="4">
                    <div class="step-circle"><span class="step-number">4</span></div>
                    <span class="step-label" data-i18n="step_integration">Integration</span>
                </div>
                <div class="step-indicator" data-step="5">
                    <div class="step-circle"><span class="step-number">5</span></div>
                    <span class="step-label" data-i18n="step_billing">Billing</span>
                </div>
                <div class="step-indicator" data-step="6">
                    <div class="step-circle"><span class="step-number">6</span></div>
                    <span class="step-label" data-i18n="step_communication">Communication</span>
                </div>
            </div>
        </div>

        <!-- ═══════════════════ FORM CARD ═══════════════════ -->
        <div class="form-card">
            <form action="" method="POST" id="onboardingForm" novalidate>
                @csrf

                {{-- ╔═══════════════════════════════════════════════════╗ --}}
                {{-- ║  STEP 1 — DATOS GENERALES DEL NEGOCIO            ║ --}}
                {{-- ╚═══════════════════════════════════════════════════╝ --}}
                <div class="form-card-header" id="stepHeader1">
                    <h2><span class="icon"><i data-lucide="building-2"></i></span> <span data-i18n="s1_title">General Business Information</span></h2>
                    <p data-i18n="s1_desc">Basic information about your company and main contact.</p>
                </div>
                <div class="form-step active" id="step1">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="business_name" data-i18n="s1_business_name">Legal business name <span class="req">*</span></label>
                            <input type="text" id="business_name" name="business_name" required data-i18n-ph="s1_business_name_ph" placeholder="E.g. Lancaster Foods LLC">
                        </div>
                        <div class="form-group">
                            <label for="dba_name" data-i18n="s1_dba">DBA / Trade name</label>
                            <input type="text" id="dba_name" name="dba_name" data-i18n-ph="s1_dba_ph" placeholder="E.g. Lancaster Eats">
                        </div>
                        <div class="form-group">
                            <label for="contact_name" data-i18n="s1_contact">Main contact <span class="req">*</span></label>
                            <input type="text" id="contact_name" name="contact_name" required data-i18n-ph="s1_contact_ph" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <label for="contact_role" data-i18n="s1_role">Role</label>
                            <input type="text" id="contact_role" name="contact_role" data-i18n-ph="s1_role_ph" placeholder="E.g. Manager, Owner">
                        </div>
                        <div class="form-group">
                            <label for="phone" data-i18n="s1_phone">Phone <span class="req">*</span></label>
                            <input type="tel" id="phone" name="phone" required placeholder="+1 (555) 123-4567">
                        </div>
                        <div class="form-group">
                            <label for="email" data-i18n="s1_email">Email <span class="req">*</span></label>
                            <input type="email" id="email" name="email" required data-i18n-ph="s1_email_ph" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="city" data-i18n="s1_city">City / Borough / State</label>
                            <input type="text" id="city" name="city" data-i18n-ph="s1_city_ph" placeholder="E.g. Brooklyn, NY">
                        </div>
                        <div class="form-group">
                            <label for="zip">ZIP Code</label>
                            <input type="text" id="zip" name="zip" data-i18n-ph="s1_zip_ph" placeholder="E.g. 11201">
                        </div>
                        <div class="form-group">
                            <label for="business_type" data-i18n="s1_type">Business type <span class="req">*</span></label>
                            <select id="business_type" name="business_type" required>
                                <option value="" data-i18n="select_option">Select an option</option>
                                <option value="restaurant" data-i18n="opt_restaurant">Restaurant</option>
                                <option value="bakery">Bakery</option>
                                <option value="grocery">Grocery</option>
                                <option value="dark_kitchen">Dark Kitchen</option>
                                <option value="chain" data-i18n="opt_chain">Chain</option>
                                <option value="franchise" data-i18n="opt_franchise">Franchise</option>
                                <option value="other" data-i18n="opt_other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="num_branches" data-i18n="s1_branches">Number of branches</label>
                            <input type="number" id="num_branches" name="num_branches" min="1" value="1" placeholder="1">
                        </div>
                        <div class="form-group full-width">
                            <label for="address" data-i18n="s1_address">Main branch address <span class="req">*</span></label>
                            <input type="text" id="address" name="address" required data-i18n-ph="s1_address_ph" placeholder="Full address">
                        </div>
                        <div class="form-group full-width">
                            <label for="gps_link" data-i18n="s1_gps">Google Maps link (optional)</label>
                            <input type="url" id="gps_link" name="gps_link" placeholder="https://maps.google.com/...">
                        </div>
                        <div class="form-group full-width">
                            <label for="hours" data-i18n="s1_hours">Operating hours</label>
                            <input type="text" id="hours" name="hours" readonly class="hours-picker-input" data-i18n-ph="hours_picker_ph" placeholder="Click to select hours" onclick="openScheduleModal('hours')">
                        </div>
                    </div>
                </div>

                {{-- ╔═══════════════════════════════════════════════════╗ --}}
                {{-- ║  STEP 2 — PERFIL OPERATIVO                      ║ --}}
                {{-- ╚═══════════════════════════════════════════════════╝ --}}
                <div class="form-card-header" id="stepHeader2" style="display:none">
                    <h2><span class="icon"><i data-lucide="bar-chart-3"></i></span> <span data-i18n="s2_title">Operational Profile</span></h2>
                    <p data-i18n="s2_desc">Tell us about your current delivery volume and operations.</p>
                </div>
                <div class="form-step" id="step2">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="orders_day" data-i18n="s2_orders_day">Average orders per day</label>
                            <input type="number" id="orders_day" name="orders_day" min="0" data-i18n-ph="s2_orders_day_ph" placeholder="E.g. 50">
                        </div>
                        <div class="form-group">
                            <label for="orders_week" data-i18n="s2_orders_week">Average orders per week</label>
                            <input type="number" id="orders_week" name="orders_week" min="0" data-i18n-ph="s2_orders_week_ph" placeholder="E.g. 350">
                        </div>
                        <div class="form-group">
                            <label for="peak_hours" data-i18n="s2_peak">Peak hours</label>
                            <input type="text" id="peak_hours" name="peak_hours" data-i18n-ph="s2_peak_ph" placeholder="E.g. 12pm-2pm, 6pm-9pm">
                        </div>
                        <div class="form-group">
                            <label for="avg_ticket" data-i18n="s2_ticket">Average ticket (USD)</label>
                            <input type="number" id="avg_ticket" name="avg_ticket" min="0" step="0.01" data-i18n-ph="s2_ticket_ph" placeholder="E.g. 28.50">
                        </div>
                        <div class="form-group">
                            <label for="delivery_radius" data-i18n="s2_radius">Delivery radius (miles)</label>
                            <input type="text" id="delivery_radius" name="delivery_radius" data-i18n-ph="s2_radius_ph" placeholder="E.g. 5 miles">
                        </div>
                        <div class="form-group">
                            <label for="device_type" data-i18n="s2_device">Device for operations</label>
                            <select id="device_type" name="device_type">
                                <option value="" data-i18n="select_placeholder">Select</option>
                                <option value="tablet">Tablet</option>
                                <option value="computer" data-i18n="opt_computer">Computer</option>
                                <option value="phone" data-i18n="opt_phone">Phone</option>
                                <option value="multiple" data-i18n="opt_multiple">Multiple</option>
                            </select>
                        </div>

                        <div class="full-width section-divider" data-i18n="s2_div_logistics">Current logistics</div>

                        <div class="form-group">
                            <label data-i18n="s2_own_drivers">Do you have your own drivers?</label>
                            <div class="toggle-group">
                                <label class="toggle-btn"><input type="radio" name="own_drivers" value="yes"> <span data-i18n="yes">Yes</span></label>
                                <label class="toggle-btn"><input type="radio" name="own_drivers" value="no"> No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label data-i18n="s2_self_delivery">Do you currently self-deliver?</label>
                            <div class="toggle-group">
                                <label class="toggle-btn"><input type="radio" name="self_delivery" value="yes"> <span data-i18n="yes2">Yes</span></label>
                                <label class="toggle-btn"><input type="radio" name="self_delivery" value="no"> No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label data-i18n="s2_3pl">Do you currently use 3PL?</label>
                            <div class="toggle-group">
                                <label class="toggle-btn"><input type="radio" name="uses_3pl" value="yes"> <span data-i18n="yes3">Yes</span></label>
                                <label class="toggle-btn"><input type="radio" name="uses_3pl" value="no"> No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="active_drivers" data-i18n="s2_active_drivers">Active drivers (if applicable)</label>
                            <input type="number" id="active_drivers" name="active_drivers" min="0" data-i18n-ph="s2_active_drivers_ph" placeholder="E.g. 5">
                        </div>

                        <div class="full-width section-divider" data-i18n="s2_div_challenges">Current challenges</div>

                        <div class="form-group full-width">
                            <label data-i18n="s2_pain_points">What are your main challenges?</label>
                            <div class="option-grid">
                                <label class="option-card"><input type="checkbox" name="pain_points[]" value="delays"><span class="option-check"></span> <span data-i18n="opt_delays">Delays</span></label>
                                <label class="option-card"><input type="checkbox" name="pain_points[]" value="cancellations"><span class="option-check"></span> <span data-i18n="opt_cancellations">Cancellations</span></label>
                                <label class="option-card"><input type="checkbox" name="pain_points[]" value="support"><span class="option-check"></span> <span data-i18n="opt_support">Support</span></label>
                                <label class="option-card"><input type="checkbox" name="pain_points[]" value="costs"><span class="option-check"></span> <span data-i18n="opt_costs">High costs</span></label>
                                <label class="option-card"><input type="checkbox" name="pain_points[]" value="coverage"><span class="option-check"></span> <span data-i18n="opt_coverage">Coverage</span></label>
                                <label class="option-card"><input type="checkbox" name="pain_points[]" value="tracking"><span class="option-check"></span> Tracking</label>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ╔═══════════════════════════════════════════════════╗ --}}
                {{-- ║  STEP 3 — CANALES DE VENTA ACTUALES              ║ --}}
                {{-- ╚═══════════════════════════════════════════════════╝ --}}
                <div class="form-card-header" id="stepHeader3" style="display:none">
                    <h2><span class="icon"><i data-lucide="smartphone"></i></span> <span data-i18n="s3_title">Current Sales Channels</span></h2>
                    <p data-i18n="s3_desc">What platforms and tools do you use today?</p>
                </div>
                <div class="form-step" id="step3">
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label data-i18n="s3_platforms">Active delivery platforms</label>
                            <div class="option-grid">
                                <label class="option-card"><input type="checkbox" name="channels[]" value="ubereats"><span class="option-check"></span> Uber Eats</label>
                                <label class="option-card"><input type="checkbox" name="channels[]" value="doordash"><span class="option-check"></span> DoorDash</label>
                                <label class="option-card"><input type="checkbox" name="channels[]" value="grubhub"><span class="option-check"></span> Grubhub</label>
                                <label class="option-card"><input type="checkbox" name="channels[]" value="deliverycom"><span class="option-check"></span> Delivery.com</label>
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <label data-i18n="s3_tools">Tools / POS / Middleware</label>
                            <div class="option-grid">
                                <label class="option-card"><input type="checkbox" name="tools[]" value="toast"><span class="option-check"></span> Toast</label>
                                <label class="option-card"><input type="checkbox" name="tools[]" value="otter"><span class="option-check"></span> Otter</label>
                                <label class="option-card"><input type="checkbox" name="tools[]" value="chownow"><span class="option-check"></span> ChowNow</label>
                                <label class="option-card"><input type="checkbox" name="tools[]" value="clover"><span class="option-check"></span> Clover</label>
                                <label class="option-card"><input type="checkbox" name="tools[]" value="square"><span class="option-check"></span> Square</label>
                                <label class="option-card"><input type="checkbox" name="tools[]" value="olo"><span class="option-check"></span> Olo</label>
                                <label class="option-card"><input type="checkbox" name="tools[]" value="deliverect"><span class="option-check"></span> Deliverect</label>
                                <label class="option-card"><input type="checkbox" name="tools[]" value="other_tool"><span class="option-check"></span> <span data-i18n="opt_other2">Other</span></label>
                            </div>
                        </div>

                        <div class="full-width section-divider" data-i18n="s3_div_own">Own channels</div>

                        <div class="form-group">
                            <label data-i18n="s3_has_website">Do you have your own ordering website?</label>
                            <div class="toggle-group">
                                <label class="toggle-btn"><input type="radio" name="has_website" value="yes"> <span data-i18n="yes4">Yes</span></label>
                                <label class="toggle-btn"><input type="radio" name="has_website" value="no"> No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="website_url" data-i18n="s3_website_url">Website URL (if applicable)</label>
                            <input type="url" id="website_url" name="website_url" placeholder="https://...">
                        </div>
                        <div class="form-group">
                            <label data-i18n="s3_has_app">Do you have your own app?</label>
                            <div class="toggle-group">
                                <label class="toggle-btn"><input type="radio" name="has_app" value="yes"> <span data-i18n="yes5">Yes</span></label>
                                <label class="toggle-btn"><input type="radio" name="has_app" value="no"> No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label data-i18n="s3_has_pos">Do you have an integrated POS?</label>
                            <div class="toggle-group">
                                <label class="toggle-btn"><input type="radio" name="has_pos" value="yes"> <span data-i18n="yes6">Yes</span></label>
                                <label class="toggle-btn"><input type="radio" name="has_pos" value="no"> No</label>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ╔═══════════════════════════════════════════════════╗ --}}
                {{-- ║  STEP 4 — INTEGRACIÓN CON MOTOCLICK              ║ --}}
                {{-- ╚═══════════════════════════════════════════════════╝ --}}
                <div class="form-card-header" id="stepHeader4" style="display:none">
                    <h2><span class="icon"><i data-lucide="rocket"></i></span> <span data-i18n="s4_title">Motoclick Integration</span></h2>
                    <p data-i18n="s4_desc">How would you like to work with us?</p>
                </div>
                <div class="form-step" id="step4">
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label data-i18n="s4_service_type">Desired service type</label>
                            <div class="option-grid">
                                <label class="option-card"><input type="checkbox" name="service_type[]" value="logistics_only"><span class="option-check"></span> <span data-i18n="opt_logistics">Logistics only</span></label>
                                <label class="option-card"><input type="checkbox" name="service_type[]" value="self_delivery_assist"><span class="option-check"></span> Self-delivery assist</label>
                                <label class="option-card"><input type="checkbox" name="service_type[]" value="dedicated_fleet"><span class="option-check"></span> <span data-i18n="opt_fleet">Dedicated fleet</span></label>
                                <label class="option-card"><input type="checkbox" name="service_type[]" value="fallback_3pl"><span class="option-check"></span> <span data-i18n="opt_fallback">3rd party fallback</span></label>
                                <label class="option-card"><input type="checkbox" name="service_type[]" value="white_label"><span class="option-check"></span> White-label / Branded</label>
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <label data-i18n="s4_integration_method">Preferred integration method</label>
                            <div class="option-grid">
                                <label class="option-card"><input type="radio" name="integration_method" value="api"><span class="option-check"></span> API Integration</label>
                                <label class="option-card"><input type="radio" name="integration_method" value="panel"><span class="option-check"></span> <span data-i18n="opt_panel">Manual panel</span></label>
                                <label class="option-card"><input type="radio" name="integration_method" value="whatsapp"><span class="option-check"></span> WhatsApp / Chatbot</label>
                                <label class="option-card"><input type="radio" name="integration_method" value="middleware"><span class="option-check"></span> Middleware / POS</label>
                            </div>
                        </div>

                        <div class="full-width section-divider" data-i18n="s4_div_creds">Platform credentials (if applicable)</div>

                        <div class="form-group full-width">
                            <table class="cred-table">
                                <thead>
                                    <tr>
                                        <th data-i18n="s4_th_platform">Platform</th>
                                        <th data-i18n="s4_th_user">User / Email</th>
                                        <th data-i18n="s4_th_pass">Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="platform-name">DoorDash</td>
                                        <td><input type="text" name="cred_doordash_user" data-i18n-ph="cred_user_ph" placeholder="user@email.com"></td>
                                        <td><input type="password" name="cred_doordash_pass" placeholder="••••••••"></td>
                                    </tr>
                                    <tr>
                                        <td class="platform-name">Uber Eats</td>
                                        <td><input type="text" name="cred_uber_user" data-i18n-ph="cred_user_ph2" placeholder="user@email.com"></td>
                                        <td><input type="password" name="cred_uber_pass" placeholder="••••••••"></td>
                                    </tr>
                                    <tr>
                                        <td class="platform-name">Delivery.com</td>
                                        <td><input type="text" name="cred_delivery_user" data-i18n-ph="cred_user_ph3" placeholder="user@email.com"></td>
                                        <td><input type="password" name="cred_delivery_pass" placeholder="••••••••"></td>
                                    </tr>
                                    <tr>
                                        <td class="platform-name" data-i18n="s4_web_app">Web / Own app</td>
                                        <td><input type="text" name="cred_web_user" data-i18n-ph="cred_user_ph4" placeholder="user@email.com"></td>
                                        <td><input type="password" name="cred_web_pass" placeholder="••••••••"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group full-width">
                            <label for="integration_notes" data-i18n="s4_notes">Additional integration notes</label>
                            <textarea id="integration_notes" name="integration_notes" data-i18n-ph="s4_notes_ph" placeholder="Anything else we should know about your technical setup?"></textarea>
                        </div>
                    </div>
                </div>

                {{-- ╔═══════════════════════════════════════════════════╗ --}}
                {{-- ║  STEP 5 — FACTURACIÓN Y RIESGO                   ║ --}}
                {{-- ╚═══════════════════════════════════════════════════╝ --}}
                <div class="form-card-header" id="stepHeader5" style="display:none">
                    <h2><span class="icon"><i data-lucide="credit-card"></i></span> <span data-i18n="s5_title">Billing & Tax Information</span></h2>
                    <p data-i18n="s5_desc">Payment and billing information for your contract.</p>
                </div>
                <div class="form-step" id="step5">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="legal_entity" data-i18n="s5_legal">Legal entity for contract</label>
                            <input type="text" id="legal_entity" name="legal_entity" data-i18n-ph="s5_legal_ph" placeholder="Full legal name">
                        </div>
                        <div class="form-group">
                            <label for="ein">EIN / Tax ID</label>
                            <input type="text" id="ein" name="ein" placeholder="XX-XXXXXXX">
                        </div>
                        <div class="form-group full-width">
                            <label for="billing_address" data-i18n="s5_billing_addr">Billing address</label>
                            <input type="text" id="billing_address" name="billing_address" data-i18n-ph="s5_billing_addr_ph" placeholder="Full billing address">
                        </div>
                        <div class="form-group full-width">
                            <label data-i18n="s5_payment_method">Preferred payment method</label>
                            <div class="option-grid">
                                <label class="option-card"><input type="radio" name="payment_method" value="credit_card"><span class="option-check"></span> <span data-i18n="opt_credit">Credit card</span></label>
                                <label class="option-card"><input type="radio" name="payment_method" value="debit_card"><span class="option-check"></span> <span data-i18n="opt_debit">Debit card</span></label>
                                <label class="option-card"><input type="radio" name="payment_method" value="ach"><span class="option-check"></span> ACH / Transfer</label>
                                <label class="option-card"><input type="radio" name="payment_method" value="other"><span class="option-check"></span> <span data-i18n="opt_other3">Other</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="billing_frequency" data-i18n="s5_frequency">Billing frequency</label>
                            <select id="billing_frequency" name="billing_frequency">
                                <option value="" data-i18n="select_placeholder2">Select</option>
                                <option value="weekly" data-i18n="opt_weekly">Weekly</option>
                                <option value="biweekly" data-i18n="opt_biweekly">Biweekly</option>
                                <option value="monthly" data-i18n="opt_monthly">Monthly</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="authorized_signer" data-i18n="s5_signer">Authorized signer</label>
                            <input type="text" id="authorized_signer" name="authorized_signer" data-i18n-ph="s5_signer_ph" placeholder="Full name">
                        </div>
                    </div>
                </div>

                {{-- ╔═══════════════════════════════════════════════════╗ --}}
                {{-- ║  STEP 6 — COMUNICACIÓN Y PREFERENCIAS            ║ --}}
                {{-- ╚═══════════════════════════════════════════════════╝ --}}
                <div class="form-card-header" id="stepHeader6" style="display:none">
                    <h2><span class="icon"><i data-lucide="message-circle"></i></span> <span data-i18n="s6_title">Communication & Preferences</span></h2>
                    <p data-i18n="s6_desc">How do you prefer us to communicate with you?</p>
                </div>
                <div class="form-step" id="step6">
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label data-i18n="s6_comm_channel">Preferred communication channel</label>
                            <div class="option-grid">
                                <label class="option-card"><input type="checkbox" name="comm_channel[]" value="slack"><span class="option-check"></span> Slack</label>
                                <label class="option-card"><input type="checkbox" name="comm_channel[]" value="whatsapp"><span class="option-check"></span> WhatsApp</label>
                                <label class="option-card"><input type="checkbox" name="comm_channel[]" value="email"><span class="option-check"></span> Email</label>
                                <label class="option-card"><input type="checkbox" name="comm_channel[]" value="phone"><span class="option-check"></span> <span data-i18n="opt_phone2">Phone</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="whatsapp_number" data-i18n="s6_whatsapp">WhatsApp number (if applicable)</label>
                            <input type="tel" id="whatsapp_number" name="whatsapp_number" placeholder="+1 (555) 123-4567">
                        </div>
                        <div class="form-group">
                            <label for="manager_name" data-i18n="s6_manager">Operations manager name</label>
                            <input type="text" id="manager_name" name="manager_name" data-i18n-ph="s6_manager_ph" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <label data-i18n="s6_weekly_meeting">Weekly follow-up meeting?</label>
                            <div class="toggle-group">
                                <label class="toggle-btn"><input type="radio" name="weekly_meeting" value="yes"> <span data-i18n="yes7">Yes</span></label>
                                <label class="toggle-btn"><input type="radio" name="weekly_meeting" value="no"> No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label data-i18n="s6_ops_group">Operations group?</label>
                            <div class="toggle-group">
                                <label class="toggle-btn"><input type="radio" name="ops_group" value="yes"> <span data-i18n="yes8">Yes</span></label>
                                <label class="toggle-btn"><input type="radio" name="ops_group" value="no"> No</label>
                            </div>
                        </div>

                        <div class="full-width section-divider" data-i18n="s6_div_delivery">Delivery hours</div>

                        <div class="form-group full-width">
                            <label for="delivery_hours" data-i18n="s6_delivery_hours">Delivery operating hours</label>
                            <input type="text" id="delivery_hours" name="delivery_hours" readonly class="hours-picker-input" data-i18n-ph="hours_picker_ph2" placeholder="Click to select hours" onclick="openScheduleModal('delivery_hours')">
                        </div>

                        <div class="form-group full-width">
                            <label for="additional_notes" data-i18n="s6_notes">Additional notes</label>
                            <textarea id="additional_notes" name="additional_notes" data-i18n-ph="s6_notes_ph" placeholder="Is there anything else you'd like us to know for your onboarding?"></textarea>
                        </div>
                    </div>
                </div>

                <!-- ═══════════════════ NAVIGATION ═══════════════════ -->
                <div class="form-nav">
                    <button type="button" class="btn btn-back" id="btnBack" style="visibility:hidden" onclick="changeStep(-1)">
                        <i data-lucide="arrow-left" style="width:16px;height:16px"></i> <span data-i18n="btn_back">Back</span>
                    </button>
                    <div style="display:flex;flex-direction:column;align-items:center;gap:.25rem">
                        <span class="step-counter" data-i18n="step_counter">Step <strong id="currentStepNum">1</strong> of <strong>6</strong></span>
                        <button type="button" class="clear-data" id="btnClearData" onclick="clearSavedData()" data-i18n="btn_clear">Clear saved data</button>
                    </div>
                    <button type="button" class="btn btn-next" id="btnNext" onclick="changeStep(1)">
                        <span data-i18n="btn_next">Next</span> <i data-lucide="arrow-right" style="width:16px;height:16px"></i>
                    </button>
                    <button type="submit" class="btn btn-submit" id="btnSubmit" style="display:none">
                        <i data-lucide="check-circle" style="width:18px;height:18px"></i> <span data-i18n="btn_submit">Submit Request</span>
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- Save indicator toast -->
    <div class="save-toast" id="saveToast">
        <i data-lucide="check" style="width:16px;height:16px"></i>
        <span data-i18n="toast_saved">Progress saved</span>
    </div>

    <!-- ═══════════════════ SCHEDULE PICKER MODAL ═══════════════════ -->
    <div class="schedule-overlay" id="scheduleOverlay" onclick="if(event.target===this)closeScheduleModal()">
        <div class="schedule-modal">
            <div class="schedule-modal-header">
                <h3>
                    <span class="sched-icon"><i data-lucide="clock" style="width:18px;height:18px"></i></span>
                    <span data-i18n="sched_title">Business Hours</span>
                </h3>
                <button type="button" class="schedule-close-btn" onclick="closeScheduleModal()">
                    <i data-lucide="x" style="width:16px;height:16px"></i>
                </button>
            </div>
            <div class="schedule-modal-body" id="scheduleBody"></div>
            <div class="schedule-modal-footer">
                <button type="button" class="btn-apply-all" onclick="applyToAllDays()">
                    <i data-lucide="copy" style="width:14px;height:14px"></i> Aplicar a todos
                </button>
                <div class="schedule-modal-actions">
                    <button type="button" class="btn-sched-cancel" onclick="closeScheduleModal()">Cancelar</button>
                    <button type="button" class="btn-sched-save" onclick="saveSchedule()">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ═══════════════════ INIT LUCIDE ═══════════════════
        lucide.createIcons();

        // ═══════════════════ LOCALSTORAGE ═══════════════════
        const STORAGE_KEY = 'motoclick_onboarding';
        const STEP_KEY = 'motoclick_onboarding_step';
        let saveTimeout = null;

        function saveFormData() {
            const form = document.getElementById('onboardingForm');
            const data = {};

            // Text, email, tel, number, url, password inputs
            form.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"], input[type="number"], input[type="url"], input[type="password"]').forEach(function(el) {
                if (el.name) data[el.name] = el.value;
            });

            // Textareas
            form.querySelectorAll('textarea').forEach(function(el) {
                if (el.name) data[el.name] = el.value;
            });

            // Selects
            form.querySelectorAll('select').forEach(function(el) {
                if (el.name) data[el.name] = el.value;
            });

            // Radio buttons
            form.querySelectorAll('input[type="radio"]:checked').forEach(function(el) {
                if (el.name) data[el.name] = el.value;
            });

            // Checkboxes (arrays)
            var checkboxGroups = {};
            form.querySelectorAll('input[type="checkbox"]').forEach(function(el) {
                if (!el.name) return;
                if (!checkboxGroups[el.name]) checkboxGroups[el.name] = [];
                if (el.checked) checkboxGroups[el.name].push(el.value);
            });
            Object.keys(checkboxGroups).forEach(function(name) {
                data[name] = checkboxGroups[name];
            });

            // Save step
            localStorage.setItem(STORAGE_KEY, JSON.stringify(data));
            localStorage.setItem(STEP_KEY, currentStep.toString());

            showSaveToast();
        }

        function restoreFormData() {
            var saved = localStorage.getItem(STORAGE_KEY);
            if (!saved) return;

            try {
                var data = JSON.parse(saved);
            } catch(e) { return; }

            var form = document.getElementById('onboardingForm');

            // Text, email, tel, number, url, password, textarea
            form.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"], input[type="number"], input[type="url"], input[type="password"], textarea').forEach(function(el) {
                if (el.name && data[el.name] !== undefined) el.value = data[el.name];
            });

            // Selects
            form.querySelectorAll('select').forEach(function(el) {
                if (el.name && data[el.name] !== undefined) el.value = data[el.name];
            });

            // Radio buttons
            form.querySelectorAll('input[type="radio"]').forEach(function(el) {
                if (el.name && data[el.name] !== undefined) {
                    el.checked = (el.value === data[el.name]);
                }
            });

            // Checkboxes
            form.querySelectorAll('input[type="checkbox"]').forEach(function(el) {
                if (el.name && data[el.name] !== undefined) {
                    el.checked = Array.isArray(data[el.name]) && data[el.name].includes(el.value);
                }
            });

            // Restore step
            var savedStep = localStorage.getItem(STEP_KEY);
            if (savedStep) {
                var targetStep = parseInt(savedStep);
                if (targetStep >= 1 && targetStep <= TOTAL_STEPS) {
                    document.getElementById('step' + currentStep).classList.remove('active');
                    document.getElementById('stepHeader' + currentStep).style.display = 'none';
                    currentStep = targetStep;
                    document.getElementById('step' + currentStep).classList.add('active');
                    document.getElementById('stepHeader' + currentStep).style.display = '';
                    updateUI();
                }
            }
        }

        function showSaveToast() {
            var toast = document.getElementById('saveToast');
            toast.classList.add('visible');
            setTimeout(function() { toast.classList.remove('visible'); }, 2000);
        }

        function clearSavedData() {
            localStorage.removeItem(STORAGE_KEY);
            localStorage.removeItem(STEP_KEY);
            location.reload();
        }

        // Auto-save on any input change (debounced)
        document.getElementById('onboardingForm').addEventListener('input', function() {
            clearTimeout(saveTimeout);
            saveTimeout = setTimeout(saveFormData, 800);
        });
        document.getElementById('onboardingForm').addEventListener('change', function() {
            clearTimeout(saveTimeout);
            saveTimeout = setTimeout(saveFormData, 400);
        });

        // ═══════════════════ STEP NAVIGATION ═══════════════════
        const TOTAL_STEPS = 6;
        let currentStep = 1;

        function changeStep(direction) {
            const nextStep = currentStep + direction;
            if (nextStep < 1 || nextStep > TOTAL_STEPS) return;

            // Validate required fields on current step before advancing
            if (direction === 1) {
                const currentPanel = document.getElementById('step' + currentStep);
                const requiredFields = currentPanel.querySelectorAll('[required]');
                let valid = true;
                requiredFields.forEach(function(f) {
                    if (!f.value.trim()) {
                        f.style.borderColor = '#ef4444';
                        f.style.boxShadow = '0 0 0 3px rgba(239,68,68,.12)';
                        valid = false;
                        f.addEventListener('input', function handler() {
                            f.style.borderColor = '';
                            f.style.boxShadow = '';
                            f.removeEventListener('input', handler);
                        });
                    }
                });
                if (!valid) {
                    currentPanel.querySelector('[required]:invalid, [style*="border-color: rgb(239"]')?.focus();
                    return;
                }
            }

            // Hide current
            document.getElementById('step' + currentStep).classList.remove('active');
            document.getElementById('stepHeader' + currentStep).style.display = 'none';

            // Show next
            currentStep = nextStep;
            document.getElementById('step' + currentStep).classList.add('active');
            document.getElementById('stepHeader' + currentStep).style.display = '';

            updateUI();
            saveFormData();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function updateUI() {
            // Progress indicators
            document.querySelectorAll('.step-indicator').forEach(function(el) {
                var s = parseInt(el.dataset.step);
                el.classList.remove('active', 'completed');
                if (s === currentStep) el.classList.add('active');
                else if (s < currentStep) el.classList.add('completed');
            });

            // Progress bar fill
            var pct = ((currentStep - 1) / (TOTAL_STEPS - 1)) * 100;
            document.getElementById('progressFill').style.width = pct + '%';

            // Buttons
            document.getElementById('btnBack').style.visibility = currentStep === 1 ? 'hidden' : 'visible';
            document.getElementById('btnNext').style.display = currentStep === TOTAL_STEPS ? 'none' : '';
            document.getElementById('btnSubmit').style.display = currentStep === TOTAL_STEPS ? '' : 'none';

            // Step counter
            document.getElementById('currentStepNum').textContent = currentStep;
        }

        // Submit handler
        document.getElementById('onboardingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var btn = document.getElementById('btnSubmit');
            btn.innerHTML = '<i data-lucide="loader" style="width:18px;height:18px;animation:spin 1s linear infinite"></i> Enviando...';
            lucide.createIcons();
            btn.disabled = true;
            btn.style.opacity = '.7';

            // Simulate submission (replace with real form submission)
            setTimeout(function() {
                btn.innerHTML = '<i data-lucide="check-circle" style="width:18px;height:18px"></i> ¡Enviado con éxito!';
                btn.style.background = 'linear-gradient(135deg, #22c55e, #16a34a)';
                lucide.createIcons();
                // Clear saved data after successful submission
                localStorage.removeItem(STORAGE_KEY);
                localStorage.removeItem(STEP_KEY);
            }, 1500);
        });

        // ═══════════════════ RESTORE ON LOAD ═══════════════════
        restoreFormData();

        // ═══════════════════ SCHEDULE MODAL LOGIC ═══════════════════
        const DAYS = [
            { key: 'lun', label: 'Lunes' },
            { key: 'mar', label: 'Martes' },
            { key: 'mie', label: 'Miércoles' },
            { key: 'jue', label: 'Jueves' },
            { key: 'vie', label: 'Viernes' },
            { key: 'sab', label: 'Sábado' },
            { key: 'dom', label: 'Domingo' }
        ];

        let scheduleTargetField = null;
        let scheduleData = {}; // { hours: {...}, delivery_hours: {...} }
        const SCHEDULE_STORAGE_KEY = 'motoclick_schedules';

        function generateTimeOptions() {
            const times = [];
            for (let h = 0; h < 24; h++) {
                for (let m = 0; m < 60; m += 30) {
                    const hour12 = h === 0 ? 12 : (h > 12 ? h - 12 : h);
                    const ampm = h < 12 ? 'AM' : 'PM';
                    const label = hour12 + ':' + (m === 0 ? '00' : '30') + ' ' + ampm;
                    const value = (h < 10 ? '0' : '') + h + ':' + (m === 0 ? '00' : '30');
                    times.push({ label, value });
                }
            }
            return times;
        }

        const TIME_OPTIONS = generateTimeOptions();

        function buildTimeSelect(id, selectedValue) {
            let html = '<select id="' + id + '">';
            TIME_OPTIONS.forEach(function(t) {
                html += '<option value="' + t.value + '"' + (t.value === selectedValue ? ' selected' : '') + '>' + t.label + '</option>';
            });
            html += '</select>';
            return html;
        }

        function openScheduleModal(fieldId) {
            scheduleTargetField = fieldId;
            var overlay = document.getElementById('scheduleOverlay');
            var body = document.getElementById('scheduleBody');

            // Load saved schedule data for this field
            var saved = loadScheduleData(fieldId);

            var html = '';
            DAYS.forEach(function(day) {
                var dayData = saved[day.key] || { active: day.key !== 'dom', open: '10:00', close: '22:00' };
                var activeChecked = dayData.active ? ' checked' : '';
                var nameClass = dayData.active ? 'day-name' : 'day-name inactive';
                var timesClass = dayData.active ? 'day-times' : 'day-times hidden';

                html += '<div class="schedule-day-row" data-day="' + day.key + '">';
                html += '  <label class="day-toggle">';
                html += '    <input type="checkbox" id="toggle_' + day.key + '"' + activeChecked + ' onchange="toggleDay(\'' + day.key + '\')">';
                html += '    <span class="day-toggle-track"></span>';
                html += '  </label>';
                html += '  <span class="' + nameClass + '" id="dayName_' + day.key + '">' + day.label + '</span>';
                html += '  <div class="' + timesClass + '" id="dayTimes_' + day.key + '">';
                html += buildTimeSelect('open_' + day.key, dayData.open);
                html += '    <span class="time-sep">a</span>';
                html += buildTimeSelect('close_' + day.key, dayData.close);
                html += '  </div>';
                html += '  <span class="day-closed-label" id="dayClosed_' + day.key + '" style="' + (dayData.active ? 'display:none' : '') + '">Cerrado</span>';
                html += '</div>';
            });

            body.innerHTML = html;
            overlay.classList.add('open');
            document.body.style.overflow = 'hidden';
            lucide.createIcons();
        }

        function closeScheduleModal() {
            document.getElementById('scheduleOverlay').classList.remove('open');
            document.body.style.overflow = '';
        }

        function toggleDay(dayKey) {
            var cb = document.getElementById('toggle_' + dayKey);
            var nameEl = document.getElementById('dayName_' + dayKey);
            var timesEl = document.getElementById('dayTimes_' + dayKey);
            var closedEl = document.getElementById('dayClosed_' + dayKey);

            if (cb.checked) {
                nameEl.classList.remove('inactive');
                timesEl.classList.remove('hidden');
                closedEl.style.display = 'none';
            } else {
                nameEl.classList.add('inactive');
                timesEl.classList.add('hidden');
                closedEl.style.display = '';
            }
        }

        function applyToAllDays() {
            // Find first active day
            var firstActive = null;
            DAYS.forEach(function(day) {
                if (!firstActive && document.getElementById('toggle_' + day.key).checked) {
                    firstActive = day.key;
                }
            });
            if (!firstActive) return;

            var openVal = document.getElementById('open_' + firstActive).value;
            var closeVal = document.getElementById('close_' + firstActive).value;

            DAYS.forEach(function(day) {
                var cb = document.getElementById('toggle_' + day.key);
                // Activate all days and set same times
                if (!cb.checked) {
                    cb.checked = true;
                    toggleDay(day.key);
                }
                document.getElementById('open_' + day.key).value = openVal;
                document.getElementById('close_' + day.key).value = closeVal;
            });
        }

        function formatTime(val24) {
            var parts = val24.split(':');
            var h = parseInt(parts[0]);
            var m = parts[1];
            var ampm = h < 12 ? 'AM' : 'PM';
            var h12 = h === 0 ? 12 : (h > 12 ? h - 12 : h);
            return h12 + ':' + m + ampm;
        }

        function saveSchedule() {
            var data = {};
            DAYS.forEach(function(day) {
                data[day.key] = {
                    active: document.getElementById('toggle_' + day.key).checked,
                    open: document.getElementById('open_' + day.key).value,
                    close: document.getElementById('close_' + day.key).value
                };
            });

            // Save to scheduleData
            scheduleData[scheduleTargetField] = data;
            persistScheduleData();

            // Format readable string
            var parts = [];
            var i = 0;
            while (i < DAYS.length) {
                if (!data[DAYS[i].key].active) { i++; continue; }
                var startDay = DAYS[i];
                var openT = data[startDay.key].open;
                var closeT = data[startDay.key].close;
                var j = i;
                // Group consecutive days with same hours
                while (j + 1 < DAYS.length &&
                       data[DAYS[j+1].key].active &&
                       data[DAYS[j+1].key].open === openT &&
                       data[DAYS[j+1].key].close === closeT) {
                    j++;
                }
                var dayRange = startDay.label.substring(0, 3);
                if (j > i) dayRange += '-' + DAYS[j].label.substring(0, 3);
                parts.push(dayRange + ' ' + formatTime(openT) + '-' + formatTime(closeT));
                i = j + 1;
            }

            var fieldEl = document.getElementById(scheduleTargetField);
            fieldEl.value = parts.length > 0 ? parts.join(', ') : 'Sin horarios definidos';
            closeScheduleModal();

            // Trigger auto-save
            clearTimeout(saveTimeout);
            saveTimeout = setTimeout(saveFormData, 400);
        }

        function loadScheduleData(fieldId) {
            if (scheduleData[fieldId]) return scheduleData[fieldId];
            // Default: Lun-Sab active 10am-10pm, Dom closed
            var defaults = {};
            DAYS.forEach(function(day) {
                defaults[day.key] = {
                    active: day.key !== 'dom',
                    open: '10:00',
                    close: '22:00'
                };
            });
            return defaults;
        }

        function persistScheduleData() {
            localStorage.setItem(SCHEDULE_STORAGE_KEY, JSON.stringify(scheduleData));
        }

        // Restore schedule data on load
        (function() {
            var saved = localStorage.getItem(SCHEDULE_STORAGE_KEY);
            if (saved) {
                try { scheduleData = JSON.parse(saved); } catch(e) {}
            }
        })();

        // ═══════════════════ I18N TRANSLATION ENGINE ═══════════════════
        var currentLang = localStorage.getItem('motoclick_lang') || 'en';
        var I18N = {
            es: {
                hero_title: 'Portal de Integración Comercial',
                hero_subtitle: 'Completa el formulario para comenzar tu proceso de onboarding',
                step_business: 'Negocio', step_operations: 'Operación', step_channels: 'Canales',
                step_integration: 'Integración', step_billing: 'Facturación', step_communication: 'Comunicación',
                // Step 1
                s1_title: 'Datos Generales del Negocio',
                s1_desc: 'Información básica de tu empresa y contacto principal.',
                s1_business_name: 'Nombre legal del negocio <span class="req">*</span>',
                s1_dba: 'DBA / Nombre comercial',
                s1_contact: 'Contacto principal <span class="req">*</span>',
                s1_role: 'Cargo', s1_phone: 'Teléfono <span class="req">*</span>',
                s1_email: 'Correo electrónico <span class="req">*</span>',
                s1_city: 'Ciudad / Borough / Estado', s1_type: 'Tipo de negocio <span class="req">*</span>',
                s1_branches: 'Número de sucursales',
                s1_address: 'Dirección de la sucursal principal <span class="req">*</span>',
                s1_gps: 'Enlace Google Maps (opcional)', s1_hours: 'Horarios de operación',
                select_option: 'Selecciona una opción', opt_restaurant: 'Restaurante',
                opt_chain: 'Cadena', opt_franchise: 'Franquicia', opt_other: 'Otro',
                // Step 1 placeholders
                s1_business_name_ph: 'Ej. Lancaster Foods LLC', s1_dba_ph: 'Ej. Lancaster Eats',
                s1_contact_ph: 'Nombre completo', s1_role_ph: 'Ej. Gerente, Dueño, Manager',
                s1_email_ph: 'correo@ejemplo.com', s1_city_ph: 'Ej. Brooklyn, NY',
                s1_zip_ph: 'Ej. 11201', s1_address_ph: 'Dirección completa',
                hours_picker_ph: 'Haz clic para seleccionar horarios',
                hours_picker_ph2: 'Haz clic para seleccionar horarios',
                // Step 2
                s2_title: 'Perfil Operativo',
                s2_desc: 'Cuéntanos sobre tu volumen y operación de delivery actual.',
                s2_orders_day: 'Órdenes promedio por día', s2_orders_week: 'Órdenes promedio por semana',
                s2_peak: 'Horas pico', s2_ticket: 'Ticket promedio (USD)',
                s2_radius: 'Radio de entrega (millas)', s2_device: 'Dispositivo para operaciones',
                select_placeholder: 'Selecciona', select_placeholder2: 'Selecciona',
                opt_computer: 'Computadora', opt_phone: 'Teléfono', opt_multiple: 'Varios',
                s2_div_logistics: 'Logística actual',
                s2_own_drivers: '¿Tiene conductores propios?',
                s2_self_delivery: '¿Hace self-delivery actualmente?',
                s2_3pl: '¿Usa 3PL actualmente?',
                s2_active_drivers: 'Conductores activos (si aplica)',
                s2_div_challenges: 'Problemas actuales',
                s2_pain_points: '¿Cuáles son tus principales desafíos?',
                opt_delays: 'Demoras', opt_cancellations: 'Cancelaciones',
                opt_support: 'Soporte', opt_costs: 'Costos altos', opt_coverage: 'Cobertura',
                yes: 'Sí', yes2: 'Sí', yes3: 'Sí', yes4: 'Sí', yes5: 'Sí', yes6: 'Sí', yes7: 'Sí', yes8: 'Sí',
                s2_orders_day_ph: 'Ej. 50', s2_orders_week_ph: 'Ej. 350',
                s2_peak_ph: 'Ej. 12pm-2pm, 6pm-9pm', s2_ticket_ph: 'Ej. 28.50',
                s2_radius_ph: 'Ej. 5 millas', s2_active_drivers_ph: 'Ej. 5',
                // Step 3
                s3_title: 'Canales de Venta Actuales',
                s3_desc: '¿Qué plataformas y herramientas usas hoy?',
                s3_platforms: 'Plataformas de delivery activas',
                s3_tools: 'Herramientas / POS / Middleware',
                opt_other2: 'Otro', s3_div_own: 'Canales propios',
                s3_has_website: '¿Tiene sitio web propio para órdenes?',
                s3_website_url: 'URL del sitio (si aplica)',
                s3_has_app: '¿Tiene app propia?', s3_has_pos: '¿Tiene POS integrado?',
                // Step 4
                s4_title: 'Integración con Motoclick',
                s4_desc: '¿Cómo te gustaría trabajar con nosotros?',
                s4_service_type: 'Tipo de servicio deseado',
                opt_logistics: 'Solo logística', opt_fleet: 'Flota dedicada',
                opt_fallback: 'Fallback con terceros',
                s4_integration_method: 'Método de integración preferido',
                opt_panel: 'Panel manual',
                s4_div_creds: 'Credenciales de plataformas (si aplica)',
                s4_th_platform: 'Plataforma', s4_th_user: 'Usuario / Email', s4_th_pass: 'Contraseña',
                s4_web_app: 'Web / App propia', s4_notes: 'Notas adicionales sobre integración',
                cred_user_ph: 'usuario@email.com', cred_user_ph2: 'usuario@email.com',
                cred_user_ph3: 'usuario@email.com', cred_user_ph4: 'usuario@email.com',
                s4_notes_ph: '¿Algo más que debamos saber sobre tu setup técnico?',
                // Step 5
                s5_title: 'Facturación y Datos Fiscales',
                s5_desc: 'Información de pago y facturación para tu contrato.',
                s5_legal: 'Razón social para contrato', s5_billing_addr: 'Dirección de facturación',
                s5_payment_method: 'Método de pago preferido',
                opt_credit: 'Tarjeta de crédito', opt_debit: 'Tarjeta de débito', opt_other3: 'Otro',
                s5_frequency: 'Frecuencia de cobro',
                opt_weekly: 'Semanal', opt_biweekly: 'Quincenal', opt_monthly: 'Mensual',
                s5_signer: 'Persona autorizada para firmar',
                s5_legal_ph: 'Nombre legal completo', s5_billing_addr_ph: 'Dirección completa de facturación',
                s5_signer_ph: 'Nombre completo',
                // Step 6
                s6_title: 'Comunicación y Preferencias',
                s6_desc: '¿Cómo prefieres que nos comuniquemos contigo?',
                s6_comm_channel: 'Canal de comunicación preferido',
                opt_phone2: 'Teléfono',
                s6_whatsapp: 'Número WhatsApp (si aplica)',
                s6_manager: 'Nombre del manager operativo',
                s6_weekly_meeting: '¿Reunión semanal de seguimiento?',
                s6_ops_group: '¿Grupo con operaciones?',
                s6_div_delivery: 'Horarios de delivery',
                s6_delivery_hours: 'Horarios de operación de delivery',
                s6_notes: 'Notas adicionales',
                s6_manager_ph: 'Nombre completo',
                s6_notes_ph: '¿Hay algo más que quieras que sepamos para tu onboarding?',
                // Nav & UI
                btn_back: 'Anterior', btn_next: 'Siguiente', btn_submit: 'Enviar Solicitud',
                btn_clear: 'Borrar datos guardados', toast_saved: 'Progreso guardado',
                step_counter: 'Paso <strong id="currentStepNum">' + currentStep + '</strong> de <strong>6</strong>',
                sched_title: 'Horarios de Atención'
            },
            en: {
                step_counter: 'Step <strong id="currentStepNum">' + currentStep + '</strong> of <strong>6</strong>'
            }
        };

        function switchLang(lang) {
            currentLang = lang;
            localStorage.setItem('motoclick_lang', lang);
            document.documentElement.lang = lang;

            // Update toggle buttons
            document.querySelectorAll('.lang-btn').forEach(function(btn) {
                btn.classList.toggle('active', btn.dataset.lang === lang);
            });

            // Update step counter dynamic value
            I18N.es.step_counter = 'Paso <strong id="currentStepNum">' + currentStep + '</strong> de <strong>6</strong>';
            I18N.en.step_counter = 'Step <strong id="currentStepNum">' + currentStep + '</strong> of <strong>6</strong>';

            // Apply translations - text content
            document.querySelectorAll('[data-i18n]').forEach(function(el) {
                var key = el.getAttribute('data-i18n');
                if (lang === 'es' && I18N.es[key]) {
                    el.innerHTML = I18N.es[key];
                } else if (lang === 'en' && I18N.en[key]) {
                    el.innerHTML = I18N.en[key];
                } else if (lang === 'en') {
                    // English is the default in HTML, use original
                    if (el._origHTML) el.innerHTML = el._origHTML;
                }
            });

            // Apply translations - placeholders
            document.querySelectorAll('[data-i18n-ph]').forEach(function(el) {
                var key = el.getAttribute('data-i18n-ph');
                if (lang === 'es' && I18N.es[key]) {
                    el.placeholder = I18N.es[key];
                } else if (el._origPH) {
                    el.placeholder = el._origPH;
                }
            });
        }

        // Store original English values on load
        document.querySelectorAll('[data-i18n]').forEach(function(el) {
            el._origHTML = el.innerHTML;
        });
        document.querySelectorAll('[data-i18n-ph]').forEach(function(el) {
            el._origPH = el.placeholder;
        });

        // Apply saved language
        if (currentLang !== 'en') {
            switchLang(currentLang);
        }
    </script>
    <style>@keyframes spin{to{transform:rotate(360deg)}}</style>

</body>
</html>