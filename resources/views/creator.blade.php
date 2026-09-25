<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Are you ready to be the part of WISHERY family? - Creator Application</title>
    <meta name="description" content="WISHERY is looking for creators across Kerala & Tamil Nadu. Join the WISHERY Creator Family today!">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        :root {
            --bg-dark: #070913;
            --bg-card: rgba(18, 24, 43, 0.75);
            --bg-card-hover: rgba(26, 35, 64, 0.85);
            --border-glass: rgba(226, 186, 70, 0.22);
            --border-glass-active: rgba(226, 186, 70, 0.7);
            --gold-primary: #e2ba46;
            --gold-gradient: linear-gradient(135deg, #f6d365 0%, #fda085 50%, #e2ba46 100%);
            --accent-purple: #9d50bb;
            --purple-gradient: linear-gradient(135deg, #6e48aa 0%, #9d50bb 100%);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --text-sub: #cbd5e1;
            --danger: #ef4444;
            --success: #10b981;
            --ease-out-expo: cubic-bezier(0.16, 1, 0.3, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-main);
            min-height: 100vh;
            min-height: 100dvh;
            height: 100vh;
            height: 100dvh;
            width: 100vw;
            overflow: hidden;
            position: relative;
            background-image: 
                radial-gradient(circle at 10% 15%, rgba(226, 186, 70, 0.12) 0%, transparent 40%),
                radial-gradient(circle at 85% 25%, rgba(157, 80, 187, 0.15) 0%, transparent 45%),
                radial-gradient(circle at 50% 90%, rgba(14, 165, 233, 0.1) 0%, transparent 50%);
            display: flex;
            flex-direction: column;
        }

        /* Ambient Glow & Grid */
        .ambient-mesh {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            background: radial-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 32px 32px;
            opacity: 0.7;
            z-index: 0;
        }

        /* Top Header Navigation */
        .top-navbar {
            position: relative;
            z-index: 20;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 32px;
            background: rgba(7, 9, 19, 0.7);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.07);
        }

        .brand-logo-link {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .brand-logo {
            height: 34px;
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 2px 8px rgba(226, 186, 70, 0.3));
        }

        .creator-tag {
            background: linear-gradient(135deg, rgba(226, 186, 70, 0.18), rgba(157, 80, 187, 0.18));
            border: 1px solid rgba(226, 186, 70, 0.4);
            color: var(--gold-primary);
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 4px 10px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .nav-progress-wrap {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .progress-bar-bg {
            width: 180px;
            height: 6px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            overflow: hidden;
            position: relative;
        }

        @media (max-width: 600px) {
            .progress-bar-bg {
                width: 90px;
            }
            .top-navbar {
                padding: 14px 18px;
            }
        }

        .progress-bar-fill {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, #e2ba46, #fda085, #9d50bb);
            border-radius: 6px;
            transition: width 0.4s var(--ease-out-expo);
            box-shadow: 0 0 12px rgba(226, 186, 70, 0.6);
        }

        .step-indicator {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-muted);
            font-variant-numeric: tabular-nums;
        }

        .step-indicator span {
            color: var(--gold-primary);
        }

        /* Slide Stage Container */
        .stage-container {
            position: relative;
            flex: 1;
            z-index: 10;
            overflow-y: auto;
            overflow-x: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px;
            padding-bottom: 90px;
        }

        #creatorForm {
            width: 100%;
            max-width: 780px;
            height: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, calc(-50% + 45px)) scale(0.96);
            width: 100%;
            max-width: 780px;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.4s var(--ease-out-expo), transform 0.4s var(--ease-out-expo);
            will-change: transform, opacity;
            padding: 16px;
            box-sizing: border-box;
            max-height: calc(100dvh - 170px);
            overflow-y: auto;
        }

        .slide::-webkit-scrollbar {
            width: 5px;
        }

        .slide::-webkit-scrollbar-thumb {
            background: rgba(226, 186, 70, 0.25);
            border-radius: 10px;
        }

        .slide.active {
            opacity: 1;
            pointer-events: auto;
            transform: translate(-50%, -50%) scale(1);
        }

        .slide.past {
            opacity: 0;
            pointer-events: none;
            transform: translate(-50%, calc(-50% - 45px)) scale(0.96);
        }

        /* Slide Typography & Content */
        .q-meta {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .q-number {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 14px;
            font-weight: 700;
            color: var(--gold-primary);
            text-transform: uppercase;
            letter-spacing: 1px;
            background: rgba(226, 186, 70, 0.12);
            padding: 4px 10px;
            border-radius: 8px;
            border: 1px solid rgba(226, 186, 70, 0.25);
        }

        .q-required-tag {
            font-size: 12px;
            color: #f87171;
            font-weight: 500;
        }

        .q-title {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(24px, 4vw, 36px);
            font-weight: 700;
            line-height: 1.25;
            color: #ffffff;
            margin-bottom: 10px;
            letter-spacing: -0.5px;
        }

        .q-title .gold-accent {
            color: var(--gold-primary);
            background: linear-gradient(135deg, #fce07f 0%, #e2ba46 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .q-desc {
            font-size: clamp(14px, 2vw, 16px);
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 28px;
            max-width: 620px;
        }

        /* Modern Slide Inputs */
        .slide-input-wrap {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }

        .slide-text-input {
            width: 100%;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 14px;
            padding: 18px 22px;
            font-size: clamp(17px, 2.5vw, 22px);
            color: #ffffff;
            font-family: inherit;
            outline: none;
            backdrop-filter: blur(10px);
            transition: all 0.25s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
        }

        .slide-text-input:focus {
            border-color: var(--gold-primary);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 4px rgba(226, 186, 70, 0.2), 0 8px 30px rgba(0, 0, 0, 0.35);
        }

        .slide-text-input::placeholder {
            color: #64748b;
            font-weight: 300;
        }

        /* Choice Cards Grid */
        .choices-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(210px, 1fr));
            gap: 12px;
            margin-bottom: 24px;
            max-height: 52vh;
            overflow-y: auto;
            padding-right: 4px;
        }

        .choices-grid::-webkit-scrollbar {
            width: 5px;
        }
        .choices-grid::-webkit-scrollbar-thumb {
            background: rgba(226, 186, 70, 0.3);
            border-radius: 10px;
        }

        .choice-card {
            background: var(--bg-card);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px;
            padding: 16px 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            transition: all 0.2s var(--ease-out-expo);
            user-select: none;
            backdrop-filter: blur(12px);
            position: relative;
        }

        .choice-card:hover {
            background: var(--bg-card-hover);
            border-color: rgba(226, 186, 70, 0.5);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
        }

        .choice-card.selected {
            background: rgba(226, 186, 70, 0.14);
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 2px var(--gold-primary), 0 8px 25px rgba(226, 186, 70, 0.25);
        }

        .choice-card input[type="radio"] {
            display: none;
        }

        .choice-badge {
            width: 26px;
            height: 26px;
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: var(--gold-primary);
            font-size: 11px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.2s;
        }

        .choice-card.selected .choice-badge {
            background: var(--gold-primary);
            color: #070913;
            border-color: var(--gold-primary);
        }

        .choice-label {
            font-size: 14.5px;
            font-weight: 500;
            color: var(--text-main);
            flex: 1;
            line-height: 1.35;
        }

        .choice-card.selected .choice-label {
            color: #ffffff;
            font-weight: 600;
        }

        .choice-icon {
            font-size: 18px;
            opacity: 0.85;
            color: var(--gold-primary);
        }

        /* Segmented Buttons for State / Follow */
        .segmented-group {
            display: flex;
            gap: 12px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .segment-btn {
            flex: 1;
            min-width: 140px;
            background: var(--bg-card);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 15px;
            font-weight: 600;
            color: var(--text-sub);
        }

        .segment-btn:hover {
            border-color: rgba(226, 186, 70, 0.4);
            color: #fff;
        }

        .segment-btn.active {
            background: linear-gradient(135deg, rgba(226, 186, 70, 0.2), rgba(157, 80, 187, 0.2));
            border-color: var(--gold-primary);
            color: #fff;
            box-shadow: 0 0 0 2px var(--gold-primary), 0 6px 20px rgba(226, 186, 70, 0.2);
        }

        /* Custom District Select */
        .district-select-wrap {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }

        .custom-slide-select {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 14px;
            padding: 16px 22px;
            font-size: 17px;
            color: #ffffff;
            outline: none;
            appearance: none;
            cursor: pointer;
            backdrop-filter: blur(10px);
            transition: all 0.2s;
        }

        .custom-slide-select:focus {
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 3px rgba(226, 186, 70, 0.2);
        }

        .custom-slide-select option {
            background: #0f152a;
            color: #fff;
            padding: 12px;
        }

        .select-chevron {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gold-primary);
            pointer-events: none;
            font-size: 14px;
        }

        /* Error Banner */
        .slide-error {
            display: none;
            align-items: center;
            gap: 8px;
            color: #f87171;
            font-size: 13px;
            font-weight: 500;
            margin-top: 6px;
            animation: fadeIn 0.2s ease;
        }

        .has-error .slide-error {
            display: flex;
        }

        .has-error .slide-text-input,
        .has-error .custom-slide-select {
            border-color: var(--danger) !important;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.2) !important;
        }

        /* Bottom Control Bar */
        .bottom-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 99;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 28px;
            padding-bottom: max(14px, env(safe-area-inset-bottom));
            background: rgba(7, 9, 19, 0.95);
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(255, 255, 255, 0.09);
        }

        /* Inline Slide Action Row - Hidden on Desktop */
        .slide-action-row {
            display: none;
        }

        .bottom-hints {
            display: flex;
            align-items: center;
            gap: 18px;
            color: var(--text-muted);
            font-size: 13px;
        }

        .key-badge {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 6px;
            padding: 2px 7px;
            font-family: inherit;
            font-size: 11px;
            font-weight: 700;
            color: #e2ba46;
            margin: 0 3px;
        }

        .nav-buttons {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn-slide-nav {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: #ffffff;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 16px;
        }

        .btn-slide-nav:hover:not(:disabled) {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(226, 186, 70, 0.5);
            color: var(--gold-primary);
        }

        .btn-slide-nav:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        .btn-primary-action {
            background: linear-gradient(135deg, #e2ba46 0%, #c59b27 100%);
            color: #070913;
            border: none;
            border-radius: 12px;
            padding: 12px 26px;
            font-family: 'Outfit', sans-serif;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.25s var(--ease-out-expo);
            box-shadow: 0 4px 18px rgba(226, 186, 70, 0.35);
        }

        .btn-primary-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(226, 186, 70, 0.5);
            background: linear-gradient(135deg, #f6d365 0%, #e2ba46 100%);
        }

        .btn-primary-action:active {
            transform: translateY(0);
        }

        .btn-primary-action:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }

        /* Welcome Slide Special Styling */
        .welcome-badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, rgba(226, 186, 70, 0.15), rgba(157, 80, 187, 0.15));
            border: 1px solid rgba(226, 186, 70, 0.35);
            padding: 6px 16px;
            border-radius: 30px;
            color: var(--gold-primary);
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        .welcome-features {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin: 24px 0 32px 0;
        }

        .welcome-pill {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 13px;
            color: var(--text-sub);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .welcome-pill i {
            color: var(--gold-primary);
        }

        /* Success Slide Styling */
        .celebration-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(226, 186, 70, 0.2), rgba(16, 185, 129, 0.2));
            border: 2px solid var(--gold-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            color: var(--gold-primary);
            margin-bottom: 24px;
            box-shadow: 0 0 35px rgba(226, 186, 70, 0.4);
            animation: pulseGlow 2s infinite ease-in-out;
        }

        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 25px rgba(226, 186, 70, 0.3); transform: scale(1); }
            50% { box-shadow: 0 0 45px rgba(226, 186, 70, 0.6); transform: scale(1.05); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(4px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .spinner {
            width: 18px;
            height: 18px;
            border: 2px solid rgba(7, 9, 19, 0.3);
            border-top-color: #070913;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Floating Instagram pill in Q2 */
        .ig-visit-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: linear-gradient(135deg, #833ab4, #fd1d1d, #fcb045);
            color: #fff;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            margin-left: 10px;
            vertical-align: middle;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .ig-visit-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(253, 29, 29, 0.4);
        }

        /* Mobile Adjustments (Mobile & Small Tablets) */
        @media (max-width: 768px) {
            /* Show Next and Previous buttons directly on slides in mobile view */
            .slide-action-row {
                display: flex;
                align-items: center;
                gap: 10px;
                margin-top: 22px;
                width: 100%;
            }

            .btn-inline-prev {
                flex: 1;
                background: rgba(255, 255, 255, 0.07);
                border: 1px solid rgba(226, 186, 70, 0.35);
                color: #ffffff;
                height: 48px;
                padding: 0 16px;
                border-radius: 12px;
                font-family: 'Outfit', sans-serif;
                font-size: 15px;
                font-weight: 700;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                cursor: pointer;
                transition: all 0.2s var(--ease-out-expo);
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            }

            .btn-inline-prev:hover {
                background: rgba(226, 186, 70, 0.15);
                border-color: var(--gold-primary);
                color: var(--gold-primary);
            }

            .btn-inline-prev:active {
                transform: translateY(0);
            }

            .btn-inline-next {
                flex: 1;
                background: linear-gradient(135deg, #e2ba46 0%, #c59b27 100%);
                color: #070913;
                border: none;
                border-radius: 12px;
                height: 48px;
                padding: 0 20px;
                font-family: 'Outfit', sans-serif;
                font-size: 15px;
                font-weight: 700;
                cursor: pointer;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                transition: all 0.2s var(--ease-out-expo);
                box-shadow: 0 4px 18px rgba(226, 186, 70, 0.35);
            }

            .btn-inline-next:hover {
                background: linear-gradient(135deg, #f6d365 0%, #e2ba46 100%);
            }

            .inline-press-hint {
                display: none;
            }

            /* Hide duplicate bottom bar on mobile */
            .bottom-bar {
                display: none !important;
            }

            .choices-grid {
                grid-template-columns: 1fr;
                max-height: 44vh;
            }

            .stage-container {
                padding: 14px;
                padding-bottom: 24px;
            }

            .slide {
                padding: 6px;
                max-height: calc(100dvh - 160px);
            }

            .q-desc {
                margin-bottom: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="ambient-mesh"></div>

    <!-- Top Navigation -->
    <header class="top-navbar">
        <a href="{{ url('/') }}" class="brand-logo-link">
            <img src="{{ asset('wishery_logo.png') }}" alt="WISHERY" class="brand-logo">
            <span class="creator-tag"><i class="fa-solid fa-sparkles"></i> Creators</span>
        </a>

        <div class="nav-progress-wrap">
            <div class="progress-bar-bg">
                <div class="progress-bar-fill" id="progressBar"></div>
            </div>
            <div class="step-indicator" id="stepCounter">
                <span id="currentStepNum">0</span> / 8
            </div>
        </div>
    </header>

    <!-- Main Stage for Slides -->
    <main class="stage-container">
        <form id="creatorForm" method="POST" action="{{ route('creator.store') }}">
            @csrf

            <!-- ================= SLIDE 0: Welcome / Hero ================= -->
            <div class="slide active" data-slide-index="0">
                <div class="welcome-badge-pill">
                    <i class="fa-solid fa-wand-magic-sparkles"></i> WISHERY CREATOR NETWORK
                </div>
                <h1 class="q-title">
                    Are you ready to be the part of<br>
                    <span class="gold-accent">WISHERY</span> family?
                </h1>
                <div class="q-desc" style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 22px;">
                    <p style="font-weight: 700; color: #ffffff; font-size: 16px;">WISHERY is looking for creators!</p>
                    <p>We’re building a community of passionate creators across <strong>Kerala &amp; Tamil Nadu</strong>.</p>
                    <p>If you love creating, storytelling, and bringing ideas to life, we’d love to welcome you to the WISHERY Creator Family.</p>
                    <p>If you’re interested in being part of the WISHERY CREATOR Family, kindly fill in your details below.</p>
                    <p style="font-style: italic; color: var(--gold-primary); font-weight: 600;">Let’s create something amazing together!</p>
                </div>

                <div class="welcome-features">
                    <div class="welcome-pill"><i class="fa-solid fa-coins"></i> Paid Brand Collaborations</div>
                    <div class="welcome-pill"><i class="fa-solid fa-bolt"></i> Creative Freedom</div>
                    <div class="welcome-pill"><i class="fa-solid fa-bullhorn"></i> High-Impact Reach</div>
                    <div class="welcome-pill"><i class="fa-solid fa-clock"></i> Takes ~1 minute</div>
                </div>

                <button type="button" class="btn-primary-action" id="btnStartForm">
                    <span>Start Application</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            <!-- ================= SLIDE 1: Full Name ================= -->
            <div class="slide" data-slide-index="1" data-field="full_name">
                <div class="q-meta">
                    <span class="q-number">01 <i class="fa-solid fa-arrow-right"></i></span>
                    <span class="q-required-tag">* Required</span>
                </div>
                <h2 class="q-title">What is your <span class="gold-accent">Full Name?</span></h2>
                <p class="q-desc">Let us know what to call you as part of our creator collective.</p>

                <div class="slide-input-wrap">
                    <input type="text" name="full_name" id="full_name" class="slide-text-input" placeholder="Type your full name here..." autocomplete="name">
                    <div class="slide-error"><i class="fa-solid fa-circle-exclamation"></i> Please enter your name</div>
                </div>

                <div class="slide-action-row">
                    <button type="button" class="btn-inline-prev" onclick="handlePrev()">
                        <i class="fa-solid fa-arrow-left"></i> <span>Back</span>
                    </button>
                    <button type="button" class="btn-inline-next" onclick="handleNext()">
                        <span>Next</span> <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- ================= SLIDE 2: Followed on Instagram ================= -->
            <div class="slide" data-slide-index="2" data-field="instagram_followed">
                <div class="q-meta">
                    <span class="q-number">02 <i class="fa-solid fa-arrow-right"></i></span>
                    <span class="q-required-tag">* Required</span>
                </div>
                <h2 class="q-title">
                    Have you followed <span class="gold-accent">WISHERY</span> on Instagram?
                    <a href="https://www.instagram.com/wishery_in/" target="_blank" class="ig-visit-badge" title="Open @wishery_in on Instagram">
                        <i class="fa-brands fa-instagram"></i> @wishery_in
                    </a>
                </h2>
                <p class="q-desc">Connect with our primary channel to stay tuned on campaigns and creator shoutouts.</p>

                <div class="choices-grid" style="grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));">
                    <label class="choice-card" data-key="A">
                        <input type="radio" name="instagram_followed" value="Yes, I’m already following">
                        <span class="choice-badge">A</span>
                        <span class="choice-label">Yes, I’m already following</span>
                        <i class="fa-solid fa-check choice-icon"></i>
                    </label>

                    <label class="choice-card" data-key="B">
                        <input type="radio" name="instagram_followed" value="No, I’ll follow now">
                        <span class="choice-badge">B</span>
                        <span class="choice-label">No, I’ll follow now</span>
                        <i class="fa-brands fa-instagram choice-icon"></i>
                    </label>
                </div>
                <div class="slide-error"><i class="fa-solid fa-circle-exclamation"></i> Please select an option</div>

                <div class="slide-action-row">
                    <button type="button" class="btn-inline-prev" onclick="handlePrev()">
                        <i class="fa-solid fa-arrow-left"></i> <span>Back</span>
                    </button>
                    <button type="button" class="btn-inline-next" onclick="handleNext()">
                        <span>Next</span> <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- ================= SLIDE 3: Follower Count ================= -->
            <div class="slide" data-slide-index="3" data-field="follower_count">
                <div class="q-meta">
                    <span class="q-number">03 <i class="fa-solid fa-arrow-right"></i></span>
                    <span class="q-required-tag">* Required</span>
                </div>
                <h2 class="q-title">How many <span class="gold-accent">followers</span> do you currently have?</h2>
                <p class="q-desc">Only creators with <strong>5K+ followers</strong> are eligible to apply.</p>

                <div class="choices-grid">
                    <label class="choice-card" data-key="A">
                        <input type="radio" name="follower_count" value="5K - 10K">
                        <span class="choice-badge">A</span>
                        <span class="choice-label">5K &ndash; 10K</span>
                        <span class="choice-icon">🌱</span>
                    </label>
                    <label class="choice-card" data-key="B">
                        <input type="radio" name="follower_count" value="10K - 25K">
                        <span class="choice-badge">B</span>
                        <span class="choice-label">10K &ndash; 25K</span>
                        <span class="choice-icon">⚡</span>
                    </label>
                    <label class="choice-card" data-key="C">
                        <input type="radio" name="follower_count" value="25K - 50K">
                        <span class="choice-badge">C</span>
                        <span class="choice-label">25K &ndash; 50K</span>
                        <span class="choice-icon">🔥</span>
                    </label>
                    <label class="choice-card" data-key="D">
                        <input type="radio" name="follower_count" value="50K - 100K">
                        <span class="choice-badge">D</span>
                        <span class="choice-label">50K &ndash; 100K</span>
                        <span class="choice-icon">🚀</span>
                    </label>
                    <label class="choice-card" data-key="E">
                        <input type="radio" name="follower_count" value="100K - 500K">
                        <span class="choice-badge">E</span>
                        <span class="choice-label">100K &ndash; 500K</span>
                        <span class="choice-icon">👑</span>
                    </label>
                    <label class="choice-card" data-key="F">
                        <input type="radio" name="follower_count" value="500K+">
                        <span class="choice-badge">F</span>
                        <span class="choice-label">500K+</span>
                        <span class="choice-icon">🌟</span>
                    </label>
                </div>
                <div class="slide-error"><i class="fa-solid fa-circle-exclamation"></i> Please select your follower tier</div>

                <div class="slide-action-row">
                    <button type="button" class="btn-inline-prev" onclick="handlePrev()">
                        <i class="fa-solid fa-arrow-left"></i> <span>Back</span>
                    </button>
                    <button type="button" class="btn-inline-next" onclick="handleNext()">
                        <span>Next</span> <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- ================= SLIDE 4: Content Niche ================= -->
            <div class="slide" data-slide-index="4" data-field="content_niche">
                <div class="q-meta">
                    <span class="q-number">04 <i class="fa-solid fa-arrow-right"></i></span>
                    <span class="q-required-tag">* Required</span>
                </div>
                <h2 class="q-title">What is your primary <span class="gold-accent">Content Niche?</span></h2>
                <p class="q-desc">Choose the creative vertical that defines your visual style and audience engagement.</p>

                <div class="choices-grid">
                    <label class="choice-card"><input type="radio" name="content_niche" value="Lifestyle"><span class="choice-label">🌿 Lifestyle</span></label>
                    <label class="choice-card"><input type="radio" name="content_niche" value="Fashion"><span class="choice-label">👗 Fashion</span></label>
                    <label class="choice-card"><input type="radio" name="content_niche" value="Business"><span class="choice-label">💼 Business</span></label>
                    <label class="choice-card"><input type="radio" name="content_niche" value="Tech"><span class="choice-label">💻 Tech &amp; Gadgets</span></label>
                    <label class="choice-card"><input type="radio" name="content_niche" value="Travel"><span class="choice-label">✈️ Travel</span></label>
                    <label class="choice-card"><input type="radio" name="content_niche" value="Food"><span class="choice-label">🍕 Food &amp; Dining</span></label>
                    <label class="choice-card"><input type="radio" name="content_niche" value="Fitness & Sports"><span class="choice-label">🏋️ Fitness &amp; Sports</span></label>
                    <label class="choice-card"><input type="radio" name="content_niche" value="Photography"><span class="choice-label">📸 Photography</span></label>
                    <label class="choice-card"><input type="radio" name="content_niche" value="Videography"><span class="choice-label">🎥 Videography</span></label>
                    <label class="choice-card"><input type="radio" name="content_niche" value="Gaming"><span class="choice-label">🎮 Gaming</span></label>
                    <label class="choice-card"><input type="radio" name="content_niche" value="Home Bakers"><span class="choice-label">🎂 Home Bakers</span></label>
                    <label class="choice-card" id="niche_other_card"><input type="radio" name="content_niche" value="Other"><span class="choice-label">✨ Other</span></label>
                </div>

                <div class="slide-input-wrap" id="other_niche_wrap" style="display: none; margin-top: 10px;">
                    <input type="text" name="content_niche_other" id="content_niche_other" class="slide-text-input" placeholder="Please specify your custom niche...">
                </div>

                <div class="slide-error"><i class="fa-solid fa-circle-exclamation"></i> Please select a content niche</div>

                <div class="slide-action-row">
                    <button type="button" class="btn-inline-prev" onclick="handlePrev()">
                        <i class="fa-solid fa-arrow-left"></i> <span>Back</span>
                    </button>
                    <button type="button" class="btn-inline-next" onclick="handleNext()">
                        <span>Next</span> <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- ================= SLIDE 5: Location (State & District) ================= -->
            <div class="slide" data-slide-index="5" data-field="location">
                <div class="q-meta">
                    <span class="q-number">05 <i class="fa-solid fa-arrow-right"></i></span>
                    <span class="q-required-tag">* Required</span>
                </div>
                <h2 class="q-title">Where are you <span class="gold-accent">based?</span></h2>
                <p class="q-desc">We are collaborating with creators actively based in Kerala and Tamil Nadu.</p>

                <!-- State Selection -->
                <div class="segmented-group">
                    <div class="segment-btn active" data-state="Kerala">
                        <i class="fa-solid fa-tree"></i> Kerala
                    </div>
                    <div class="segment-btn" data-state="Tamil Nadu">
                        <i class="fa-solid fa-landmark"></i> Tamil Nadu
                    </div>
                </div>
                <input type="hidden" name="state" id="state_input" value="Kerala">

                <!-- District Selector -->
                <div class="district-select-wrap">
                    <select name="district" id="district_select" class="custom-slide-select">
                        <option value="" disabled selected>Choose your District...</option>
                    </select>
                    <i class="fa-solid fa-chevron-down select-chevron"></i>
                </div>

                <div class="slide-error"><i class="fa-solid fa-circle-exclamation"></i> Please select your district</div>

                <div class="slide-action-row">
                    <button type="button" class="btn-inline-prev" onclick="handlePrev()">
                        <i class="fa-solid fa-arrow-left"></i> <span>Back</span>
                    </button>
                    <button type="button" class="btn-inline-next" onclick="handleNext()">
                        <span>Next</span> <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- ================= SLIDE 6: Commercials / Collaboration Charges ================= -->
            <div class="slide" data-slide-index="6" data-field="commercials">
                <div class="q-meta">
                    <span class="q-number">06 <i class="fa-solid fa-arrow-right"></i></span>
                    <span class="q-required-tag">* Required</span>
                </div>
                <h2 class="q-title">What are your <span class="gold-accent">Commercials / Charges?</span></h2>
                <p class="q-desc">Mention your standard pricing (e.g. ₹5,000 per Reel, ₹2,000 per Story, or 'Open for Negotiation').</p>

                <div class="slide-input-wrap">
                    <input type="text" name="commercials" id="commercials" class="slide-text-input" placeholder="e.g. ₹8,000 per Reel / Negotiable">
                    <div class="slide-error"><i class="fa-solid fa-circle-exclamation"></i> Please provide your commercial charges</div>
                </div>

                <div class="slide-action-row">
                    <button type="button" class="btn-inline-prev" onclick="handlePrev()">
                        <i class="fa-solid fa-arrow-left"></i> <span>Back</span>
                    </button>
                    <button type="button" class="btn-inline-next" onclick="handleNext()">
                        <span>Next</span> <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- ================= SLIDE 7: Instagram Profile Link ================= -->
            <div class="slide" data-slide-index="7" data-field="instagram_link">
                <div class="q-meta">
                    <span class="q-number">07 <i class="fa-solid fa-arrow-right"></i></span>
                    <span class="q-required-tag">* Required</span>
                </div>
                <h2 class="q-title">Share your <span class="gold-accent">Instagram Profile Link</span></h2>
                <p class="q-desc">We will review your recent content style, aesthetics, and engagement profile.</p>

                <div class="slide-input-wrap">
                    <input type="url" name="instagram_link" id="instagram_link" class="slide-text-input" placeholder="https://instagram.com/yourhandle">
                    <div class="slide-error"><i class="fa-solid fa-circle-exclamation"></i> Please enter your Instagram profile URL</div>
                </div>

                <div class="slide-action-row">
                    <button type="button" class="btn-inline-prev" onclick="handlePrev()">
                        <i class="fa-solid fa-arrow-left"></i> <span>Back</span>
                    </button>
                    <button type="button" class="btn-inline-next" onclick="handleNext()">
                        <span>Next</span> <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- ================= SLIDE 8: Contact Number ================= -->
            <div class="slide" data-slide-index="8" data-field="contact_number">
                <div class="q-meta">
                    <span class="q-number">08 <i class="fa-solid fa-arrow-right"></i></span>
                    <span class="q-required-tag">* Required</span>
                </div>
                <h2 class="q-title">What is your <span class="gold-accent">Contact Number?</span></h2>
                <p class="q-desc">WhatsApp number preferred so our brand team can directly reach out with briefs.</p>

                <div class="slide-input-wrap">
                    <input type="tel" name="contact_number" id="contact_number" class="slide-text-input" placeholder="+91 98765 43210">
                    <div class="slide-error"><i class="fa-solid fa-circle-exclamation"></i> Please provide a valid phone number</div>
                </div>

                <div class="slide-action-row">
                    <button type="button" class="btn-inline-prev" onclick="handlePrev()">
                        <i class="fa-solid fa-arrow-left"></i> <span>Back</span>
                    </button>
                    <button type="button" class="btn-inline-next" id="btnSubmitInline" onclick="handleNext()">
                        <span>Submit Application</span> <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </div>
            </div>

            <!-- ================= SLIDE 9: Success Celebration Screen ================= -->
            <div class="slide" data-slide-index="9" id="slideSuccess">
                <div class="celebration-icon">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h2 class="q-title">You're in the <span class="gold-accent">WISHERY Creator Network!</span></h2>
                <p class="q-desc" style="max-width: 560px;">
                    Your response has been saved successfully into our talent database. Our creative direction team will review your profile and connect via WhatsApp or Instagram DM for upcoming brand campaigns.
                </p>

                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="{{ url('/') }}" class="btn-primary-action" style="text-decoration: none;">
                        <i class="fa-solid fa-house"></i>
                        <span>Visit Wishery Home</span>
                    </a>
                    <button type="button" class="btn-slide-nav" id="btnRestart" style="width: auto; padding: 0 20px; font-size: 14px; gap: 8px;" title="Submit Another">
                        <i class="fa-solid fa-rotate-left"></i> Submit Another
                    </button>
                </div>
            </div>

        </form>
    </main>

    <!-- Bottom Action & Control Bar -->
    <footer class="bottom-bar">
        <div class="bottom-hints">
            <span>Press <span class="key-badge">Enter ↵</span> to continue</span>
            <span>Use <span class="key-badge">↑</span> <span class="key-badge">↓</span> arrows</span>
        </div>

        <div class="nav-buttons">
            <button type="button" class="btn-slide-nav" id="btnPrev" title="Previous Question" disabled>
                <i class="fa-solid fa-chevron-up"></i>
            </button>

            <button type="button" class="btn-slide-nav" id="btnNext" title="Next Question">
                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <button type="button" class="btn-primary-action" id="btnNextAction">
                <span id="nextBtnText">Next</span>
                <i class="fa-solid fa-arrow-down" id="nextBtnIcon"></i>
            </button>
        </div>
    </footer>

    <!-- Scripts for Slide Engine & AJAX -->
    <script>
        const districtsData = {
            "Kerala": [
                "Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod",
                "Kollam", "Kottayam", "Kozhikode", "Malappuram", "Palakkad",
                "Pathanamthitta", "Thiruvananthapuram", "Thrissur", "Wayanad"
            ],
            "Tamil Nadu": [
                "Ariyalur", "Chengalpattu", "Chennai", "Coimbatore", "Cuddalore",
                "Dharmapuri", "Dindigul", "Erode", "Kallakurichi", "Kanchipuram",
                "Kanyakumari", "Karur", "Krishnagiri", "Madurai", "Mayiladuthurai",
                "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur", "Pudukkottai",
                "Ramanathapuram", "Ranipet", "Salem", "Sivaganga", "Tenkasi",
                "Thanjavur", "Theni", "Thoothukudi", "Tiruchirappalli", "Tirunelveli",
                "Tirupathur", "Tiruppur", "Tiruvallur", "Tiruvannamalai", "Tiruvarur",
                "Vellore", "Viluppuram", "Virudhunagar"
            ]
        };

        const totalQuestions = 8;
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const progressBar = document.getElementById('progressBar');
        const stepCounter = document.getElementById('stepCounter');
        const currentStepNum = document.getElementById('currentStepNum');
        const btnPrev = document.getElementById('btnPrev');
        const btnNext = document.getElementById('btnNext');
        const btnNextAction = document.getElementById('btnNextAction');
        const nextBtnText = document.getElementById('nextBtnText');
        const nextBtnIcon = document.getElementById('nextBtnIcon');
        const creatorForm = document.getElementById('creatorForm');
        const bottomBar = document.querySelector('.bottom-bar');

        // Populate districts
        const districtSelect = document.getElementById('district_select');
        const stateInput = document.getElementById('state_input');

        function populateDistricts(state) {
            districtSelect.innerHTML = '<option value="" disabled selected>Choose your District...</option>';
            const list = districtsData[state] || [];
            list.forEach(dist => {
                const opt = document.createElement('option');
                opt.value = dist;
                opt.textContent = dist;
                districtSelect.appendChild(opt);
            });
        }

        populateDistricts('Kerala');

        // State Segment buttons
        document.querySelectorAll('.segment-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.segment-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const selectedState = btn.getAttribute('data-state');
                stateInput.value = selectedState;
                populateDistricts(selectedState);
            });
        });

        // Update Slide State
        function goToSlide(index) {
            if (index < 0 || index >= slides.length) return;

            slides.forEach((s, idx) => {
                s.classList.remove('active', 'past');
                if (idx < index) {
                    s.classList.add('past');
                } else if (idx === index) {
                    s.classList.add('active');
                }
            });

            currentSlideIndex = index;

            // Update Progress Bar
            let percent = 0;
            if (index === 0) {
                percent = 5;
                currentStepNum.textContent = '0';
            } else if (index <= totalQuestions) {
                percent = Math.round((index / totalQuestions) * 100);
                currentStepNum.textContent = index;
            } else {
                percent = 100;
                currentStepNum.textContent = totalQuestions;
            }
            progressBar.style.width = percent + '%';

            // Button states
            btnPrev.disabled = (index === 0 || index > totalQuestions);
            btnNext.disabled = (index >= totalQuestions);

            if (index === 0) {
                nextBtnText.textContent = 'Start';
                nextBtnIcon.className = 'fa-solid fa-arrow-right';
                btnNextAction.style.display = 'inline-flex';
            } else if (index === totalQuestions) {
                nextBtnText.textContent = 'Submit Application';
                nextBtnIcon.className = 'fa-solid fa-paper-plane';
                btnNextAction.style.display = 'inline-flex';
            } else if (index > totalQuestions) {
                // Success slide
                bottomBar.style.display = 'none';
            } else {
                nextBtnText.textContent = 'Next';
                nextBtnIcon.className = 'fa-solid fa-arrow-down';
                btnNextAction.style.display = 'inline-flex';
            }

            // Auto focus active slide input
            const activeSlide = slides[index];
            const autoFocusInput = activeSlide.querySelector('input[type="text"], input[type="tel"], input[type="url"], select');
            if (autoFocusInput) {
                setTimeout(() => autoFocusInput.focus(), 300);
            }
        }

        // Validate current slide before proceeding
        function validateSlide(index) {
            if (index === 0) return true; // Intro slide always valid

            const slide = slides[index];
            slide.classList.remove('has-error');

            switch (index) {
                case 1: // Full name
                    const name = document.getElementById('full_name').value.trim();
                    if (!name) {
                        slide.classList.add('has-error');
                        return false;
                    }
                    return true;

                case 2: // Instagram followed
                    const igFollowed = document.querySelector('input[name="instagram_followed"]:checked');
                    if (!igFollowed) {
                        slide.classList.add('has-error');
                        return false;
                    }
                    return true;

                case 3: // Follower count
                    const followerCount = document.querySelector('input[name="follower_count"]:checked');
                    if (!followerCount) {
                        slide.classList.add('has-error');
                        return false;
                    }
                    return true;

                case 4: // Content niche
                    const niche = document.querySelector('input[name="content_niche"]:checked');
                    if (!niche) {
                        slide.classList.add('has-error');
                        return false;
                    }
                    if (niche.value === 'Other') {
                        const otherVal = document.getElementById('content_niche_other').value.trim();
                        if (!otherVal) {
                            slide.classList.add('has-error');
                            return false;
                        }
                    }
                    return true;

                case 5: // District
                    const district = document.getElementById('district_select').value;
                    if (!district) {
                        slide.classList.add('has-error');
                        return false;
                    }
                    return true;

                case 6: // Commercials
                    const comm = document.getElementById('commercials').value.trim();
                    if (!comm) {
                        slide.classList.add('has-error');
                        return false;
                    }
                    return true;

                case 7: // Instagram link
                    const igLink = document.getElementById('instagram_link').value.trim();
                    if (!igLink) {
                        slide.classList.add('has-error');
                        return false;
                    }
                    return true;

                case 8: // Contact number
                    const phone = document.getElementById('contact_number').value.trim();
                    if (!phone || phone.length < 5) {
                        slide.classList.add('has-error');
                        return false;
                    }
                    return true;

                default:
                    return true;
            }
        }

        function handleNext() {
            if (currentSlideIndex === totalQuestions) {
                // Submit Form
                if (validateSlide(currentSlideIndex)) {
                    submitCreatorForm();
                }
                return;
            }

            if (validateSlide(currentSlideIndex)) {
                goToSlide(currentSlideIndex + 1);
            }
        }

        function handlePrev() {
            if (currentSlideIndex > 0) {
                goToSlide(currentSlideIndex - 1);
            }
        }

        // Choice cards selection handler
        document.querySelectorAll('.choice-card').forEach(card => {
            card.addEventListener('click', function(e) {
                const radio = card.querySelector('input[type="radio"]');
                if (!radio) return;

                const groupName = radio.name;
                const siblings = card.closest('.slide').querySelectorAll('.choice-card');
                siblings.forEach(s => s.classList.remove('selected'));
                card.classList.add('selected');
                radio.checked = true;

                card.closest('.slide').classList.remove('has-error');

                // Special handling for Niche "Other"
                if (groupName === 'content_niche') {
                    const otherWrap = document.getElementById('other_niche_wrap');
                    if (radio.value === 'Other') {
                        otherWrap.style.display = 'block';
                        document.getElementById('content_niche_other').focus();
                        return; // Don't auto-advance on Other
                    } else {
                        otherWrap.style.display = 'none';
                    }
                }

                // Smooth Auto-advance on radio selection after a 250ms visual pause!
                setTimeout(() => {
                    if (currentSlideIndex < totalQuestions) {
                        handleNext();
                    }
                }, 220);
            });
        });

        // Navigation button listeners
        btnNextAction.addEventListener('click', handleNext);
        btnNext.addEventListener('click', handleNext);
        btnPrev.addEventListener('click', handlePrev);
        document.getElementById('btnStartForm').addEventListener('click', () => goToSlide(1));

        // District select auto-advance
        districtSelect.addEventListener('change', () => {
            if (districtSelect.value) {
                slides[5].classList.remove('has-error');
                setTimeout(() => handleNext(), 300);
            }
        });

        // Input enter key handling
        document.querySelectorAll('.slide-text-input').forEach(input => {
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    handleNext();
                }
            });
            input.addEventListener('input', () => {
                const slide = input.closest('.slide');
                if (slide) slide.classList.remove('has-error');
            });
        });

        // Global Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (currentSlideIndex > totalQuestions) return;

            // Enter key
            if (e.key === 'Enter' && e.target.tagName !== 'TEXTAREA') {
                e.preventDefault();
                handleNext();
            }

            // Arrow keys
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                handleNext();
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                handlePrev();
            }

            // Shortcut keys A, B, C... on active slide
            const activeSlide = slides[currentSlideIndex];
            if (activeSlide && (e.target.tagName !== 'INPUT' || e.target.type === 'radio')) {
                const key = e.key.toUpperCase();
                const matchedCard = activeSlide.querySelector(`.choice-card[data-key="${key}"]`);
                if (matchedCard) {
                    matchedCard.click();
                }
            }
        });

        // Submit creator application via AJAX
        function submitCreatorForm() {
            btnNextAction.disabled = true;
            nextBtnText.textContent = 'Submitting...';
            nextBtnIcon.className = 'spinner';

            const btnSubmitInline = document.getElementById('btnSubmitInline');
            if (btnSubmitInline) {
                btnSubmitInline.disabled = true;
                btnSubmitInline.innerHTML = '<span>Submitting...</span> <span class="spinner" style="border-top-color:#070913; width:14px; height:14px; display:inline-block;"></span>';
            }

            const formData = new FormData(creatorForm);

            fetch(creatorForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(res => {
                if (!res.ok) {
                    return res.json().then(errData => { throw errData; });
                }
                return res.json();
            })
            .then(data => {
                if (data.status === 'success') {
                    goToSlide(9); // Show celebration slide
                } else {
                    alert(data.message || 'Something went wrong. Please check your inputs.');
                    btnNextAction.disabled = false;
                    nextBtnText.textContent = 'Submit Application';
                    nextBtnIcon.className = 'fa-solid fa-paper-plane';
                    if (btnSubmitInline) {
                        btnSubmitInline.disabled = false;
                        btnSubmitInline.innerHTML = '<span>Submit Application</span> <i class="fa-solid fa-paper-plane"></i>';
                    }
                }
            })
            .catch(err => {
                console.error(err);
                let msg = 'Failed to submit form. Please check your network or try again.';
                if (err && err.errors) {
                    const firstKey = Object.keys(err.errors)[0];
                    msg = err.errors[firstKey][0];
                } else if (err && err.message) {
                    msg = err.message;
                }
                alert(msg);
                btnNextAction.disabled = false;
                nextBtnText.textContent = 'Submit Application';
                nextBtnIcon.className = 'fa-solid fa-paper-plane';
                if (btnSubmitInline) {
                    btnSubmitInline.disabled = false;
                    btnSubmitInline.innerHTML = '<span>Submit Application</span> <i class="fa-solid fa-paper-plane"></i>';
                }
            });
        }

        // Touch swipe detection for mobile screens
        let touchStartY = 0;
        let touchEndY = 0;
        document.addEventListener('touchstart', e => {
            touchStartY = e.changedTouches[0].screenY;
        }, { passive: true });

        document.addEventListener('touchend', e => {
            touchEndY = e.changedTouches[0].screenY;
            if (['INPUT', 'SELECT', 'TEXTAREA'].includes(document.activeElement?.tagName)) {
                return;
            }
            const diff = touchStartY - touchEndY;
            if (diff > 60) {
                // Swiped UP -> Next
                handleNext();
            } else if (diff < -60) {
                // Swiped DOWN -> Prev
                handlePrev();
            }
        }, { passive: true });

        // Restart button
        document.getElementById('btnRestart').addEventListener('click', () => {
            creatorForm.reset();
            document.querySelectorAll('.choice-card').forEach(c => c.classList.remove('selected'));
            document.querySelectorAll('.slide').forEach(s => s.classList.remove('has-error'));
            populateDistricts('Kerala');
            document.querySelectorAll('.segment-btn').forEach(b => b.classList.remove('active'));
            document.querySelector('.segment-btn[data-state="Kerala"]').classList.add('active');
            stateInput.value = 'Kerala';
            bottomBar.style.display = 'flex';
            btnNextAction.disabled = false;
            const btnSubmitInline = document.getElementById('btnSubmitInline');
            if (btnSubmitInline) {
                btnSubmitInline.disabled = false;
                btnSubmitInline.innerHTML = '<span>Submit Application</span> <i class="fa-solid fa-paper-plane"></i>';
            }
            goToSlide(0);
        });

        // Initialize at Slide 0
        goToSlide(0);
    </script>
</body>
</html>
