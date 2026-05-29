<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle : 'TSA2' ?></title>
    <style>
    :root {
        color-scheme: dark;
        --gold: #df8919;
        --gold-soft: rgba(223, 137, 25, 0.18);
        --gold-border: rgba(223, 137, 25, 0.28);
        --gold-glow: rgba(223, 137, 25, 0.22);
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html,
    body {
        min-height: 100%;
    }

    body {
        margin: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px 18px;
        font-family: 'Segoe UI', Arial, sans-serif;
        background: radial-gradient(circle at top left, #1a1a1a 0%, #040404 70%);
        color: #f5f3ee;
    }

    .container {
        width: 100%;
        max-width: 1140px;
        margin: auto;
        padding: 32px;
    }

    .button-card {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 14px;
        margin-top: 24px;
    }

    .button-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 14px 24px;
        border-radius: 999px;
        text-decoration: none;
        color: #fff9e6;
        background-color: var(--gold);
        border: 1px solid var(--gold-border);
        font-weight: 700;
        transition: transform 0.18s ease, background-color 0.18s ease, box-shadow 0.18s ease;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.24);
    }

    .button-link:hover,
    .button-link:focus-visible {
        transform: translateY(-2px);
        background-color: var(--gold);
        box-shadow: 0 18px 32px var(--gold-glow);
    }

    .directory-container {
        display: flex;
        flex-direction: column;
        gap: 24px;
        margin: 20px auto;
        width: 100%;
        max-width: 1080px;
        padding: 0 18px;
    }

    .directory-container h1 {
        margin: 0;
        font-size: 2.5rem;
        letter-spacing: -0.03em;
        color: #fff9e6;
    }

    .directory-table {
        width: 100%;
        border-collapse: collapse;
        background: rgba(255, 255, 255, 0.04);
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 24px 48px rgba(0, 0, 0, 0.35);
        border: 1px solid var(--gold-soft);
    }

    .directory-table th,
    .directory-table td {
        padding: 16px 18px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        font-size: 1rem;
        text-align: left;
        vertical-align: middle;
    }

    .directory-table th {
        background: rgba(255, 255, 255, 0.06);
        color: #f5e9c8;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }

    .table-img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        display: block;
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .directory-table tbody tr:last-child td {
        border-bottom: none;
    }

    .directory-table td {
        color: #e9e2c8;
    }

    .table-header th {
        background-color: rgba(223, 137, 25, 0.9);
        color: #090909;
        text-align: center;
        letter-spacing: 0.04em;
    }

    .resume-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 24px;
        margin-top: 20px;
    }

    .resume-image,
    .resume-right {
        background: rgba(255, 255, 255, 0.04);
        border-radius: 18px;
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.35);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .resume-image {
        flex: 1 1 320px;
        min-height: 380px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 28px;
    }

    .resume-image .image-box {
        width: 100%;
        max-width: 360px;
        aspect-ratio: 1/1;
        border-radius: 28px;
        background: linear-gradient(180deg, rgba(223, 137, 25, 0.12), rgba(255, 255, 255, 0.04));
        display: grid;
        place-items: center;
        border: 1px solid rgba(255, 255, 255, 0.12);
    }

    .resume-image .image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 24px;
    }

    .resume-right {
        flex: 1 1 420px;
        display: flex;
        flex-direction: column;
    }

    .resume-detail {
        padding: 32px;
        color: #f5f3ee;
        line-height: 1.7;
    }

    .resume-buttons {
        display: grid;
        gap: 12px;
        padding: 24px 28px 28px;
        background: rgba(255, 255, 255, 0.02);
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 0 0 18px 18px;
    }

    .resume-buttons .button-link {
        display: flex;
        justify-content: space-between;
        background: rgba(255, 255, 255, 0.06);
        color: #f5f3ee;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        padding: 18px 22px;
        text-transform: none;
        font-weight: 600;
    }

    .resume-buttons .button-link:hover {
        background: rgba(255, 255, 255, 0.12);
        color: #ffd966;
    }

    .resume-shell {
        width: 100%;
        max-width: 1040px;
        margin: auto;
        gap: 28px;
    }

    .profile-card {
        display: grid;
        grid-template-columns: minmax(240px, 320px) 1fr;
        gap: 24px;
        align-items: stretch;
        background: rgba(255, 255, 255, 0.04);
        border-radius: 24px;
        padding: 32px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .profile-avatar {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile-avatar .avatar-frame {
        width: 100%;
        aspect-ratio: 1 / 1;
        border-radius: 28px;
        background: linear-gradient(180deg, rgba(255, 209, 93, 0.18), rgba(255, 255, 255, 0.06));
        padding: 4px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        display: grid;
        place-items: center;
    }

    .profile-avatar .avatar-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 24px;
    }

    .profile-summary {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .eyebrow {
        display: inline-block;
        margin-bottom: 12px;
        color: #ffd966;
        text-transform: uppercase;
        letter-spacing: 0.18em;
        font-size: 0.85rem;
        font-weight: 700;
    }

    .profile-summary h2 {
        margin: 0 0 14px;
        font-size: 2.2rem;
        color: #fff9e6;
    }

    .profile-summary p {
        margin: 0;
        color: #d7ccb0;
        line-height: 1.8;
    }

    .profile-meta {
        margin-top: 24px;
        display: grid;
        gap: 14px;
    }

    .profile-meta .meta-item {
        display: flex;
        gap: 14px;
        color: #f2e9c8;
    }

    .profile-meta .meta-item strong {
        min-width: 110px;
        color: #ffd966;
        font-weight: 700;
    }

    .resume-options {
        display: grid;
        gap: 24px;
    }

    .section-panel {
        display: grid;
        gap: 12px;
    }

    .section-link {
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        padding: 18px 22px;
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.05);
        color: #f5f1db;
        border: 1px solid rgba(255, 255, 255, 0.08);
        text-decoration: none;
        font-weight: 700;
        transition: background 0.18s ease, transform 0.18s ease;
    }

    .section-link:hover {
        background: var(--gold-soft);
        transform: translateX(4px);
        color: #fff;
    }

    .section-link::before {
        content: '•';
        margin-right: 12px;
        color: #df8919;
    }

    .detail-panel {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 20px;
        padding: 26px;
        color: #ece2c8;
        min-height: 280px;
        line-height: 1.75;
    }

    .back-link {
        display: inline-block;
        margin-top: 24px;
        padding: 14px 24px;
        background-color: var(--gold);
        color: #040404;
        text-decoration: none;
        border-radius: 12px;
        font-weight: 700;
    }

    .back-link:hover {
        background-color: #df8919;
    }

    .highlight-left {
        text-align: left;
        font-weight: 600;
        color: #df8919;
    }

    @media (max-width: 860px) {
        .container {
            padding: 20px;
        }

        .directory-table th,
        .directory-table td {
            padding: 12px 14px;
        }

        .resume-grid {
            flex-direction: column;
        }

        .resume-buttons .button-link {
            justify-content: center;
        }
    }
    </style>
</head>

<body>