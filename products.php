<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products & Solutions — Net Desire Technologies | UAE IT Reseller</title>
  <meta name="description" content="Explore Net Desire Technologies' IT solutions: Acronis, Veeam, Veritas backup; Synology, QNAP storage; cybersecurity; Microsoft 365; managed IT services in UAE.">
  <link rel="canonical" href="https://www.netdesire.ae/products.html">
  <meta property="og:title"       content="Products & Solutions — Net Desire Technologies">
  <meta property="og:description" content="Authorized UAE reseller of Acronis, Veeam, Veritas, Synology, QNAP, and Microsoft 365.">
  <meta property="og:url"         content="https://www.netdesire.ae/products.html">
  <link rel="icon" href="assets/img/logo-new.png" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="assets/css/brand.css">
  <link rel="stylesheet" href="assets/css/layout.css">
  <link rel="stylesheet" href="assets/css/sections.css">
  <style>
    /* Products page sticky sidebar nav */
    .products-page-layout {
      display: grid;
      grid-template-columns: 220px 1fr;
      gap: 48px;
      align-items: start;
    }
    .products-sidenav {
      position: sticky;
      top: 96px;
      background: var(--brand-white);
      border: 1px solid var(--border-light);
      border-radius: var(--radius-lg);
      padding: 24px 0;
      box-shadow: var(--shadow-xs);
    }
    .sidenav-label {
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      color: var(--text-muted);
      padding: 0 20px;
      margin-bottom: 12px;
    }
    .sidenav-link {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 11px 20px;
      font-size: 14px;
      font-weight: 500;
      color: var(--text-secondary);
      transition: all var(--dur-fast);
      border-left: 3px solid transparent;
    }
    .sidenav-link:hover { color: var(--blue-500); background: rgba(26,95,200,0.04); }
    .sidenav-link.active {
      color: var(--blue-500);
      background: rgba(26,95,200,0.06);
      border-left-color: var(--blue-500);
      font-weight: 700;
    }
    .sidenav-icon { font-size: 16px; }

    /* Category section */
    .product-cat-section {
      scroll-margin-top: 100px;
      padding-bottom: 80px;
      border-bottom: 1px solid var(--border-light);
      margin-bottom: 80px;
    }
    .product-cat-section:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }

    .cat-header {
      display: flex;
      align-items: flex-start;
      gap: 24px;
      margin-bottom: 48px;
    }
    .cat-icon-wrap {
      width: 72px; height: 72px;
      border-radius: var(--radius-lg);
      display: flex; align-items: center; justify-content: center;
      font-size: 32px;
      flex-shrink: 0;
    }
    .cat-icon-wrap--cyber   { background: linear-gradient(135deg, rgba(26,95,200,0.12), rgba(26,95,200,0.06)); }
    .cat-icon-wrap--cloud   { background: linear-gradient(135deg, rgba(26,95,200,0.10), rgba(46,123,216,0.06)); }
    .cat-icon-wrap--backup  { background: linear-gradient(135deg, rgba(34,197,94,0.12), rgba(34,197,94,0.06)); }
    .cat-icon-wrap--storage { background: linear-gradient(135deg, rgba(139,92,246,0.12), rgba(139,92,246,0.06)); }
    .cat-icon-wrap--infra   { background: linear-gradient(135deg, rgba(26,95,200,0.10), rgba(26,95,200,0.04)); }
    .cat-icon-wrap--managed { background: linear-gradient(135deg, rgba(245,158,11,0.12), rgba(245,158,11,0.06)); }

    .cat-header-text {}
    .cat-tagline { font-size: 12px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--blue-500); margin-bottom: 8px; }
    .cat-title { font-family: 'Playfair Display', serif; font-size: clamp(22px, 2.5vw, 32px); font-weight: 600; color: var(--text-primary); margin-bottom: 10px; }
    .cat-desc  { font-size: 15px; color: var(--text-secondary); line-height: 1.78; max-width: 680px; }

    /* Service mini grid */
    .service-mini-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
    }
    .service-mini-card {
      background: var(--brand-surface);
      border: 1px solid var(--border-light);
      border-radius: var(--radius-md);
      padding: 20px 18px;
      transition: all var(--dur-base);
    }
    .service-mini-card:hover { border-color: rgba(26,95,200,0.20); box-shadow: var(--shadow-sm); }
    .smc-icon { font-size: 22px; margin-bottom: 10px; }
    .smc-name { font-size: 14px; font-weight: 700; color: var(--text-primary); margin-bottom: 6px; }
    .smc-desc { font-size: 12.5px; color: var(--text-muted); line-height: 1.65; }

    @media (max-width: 1024px) {
      .products-page-layout { grid-template-columns: 1fr; }
      .products-sidenav { position: static; display: flex; flex-wrap: wrap; gap: 0; padding: 12px 0; }
      .sidenav-label { display: none; }
      .sidenav-link { border-left: none; border-bottom: 3px solid transparent; padding: 10px 14px; font-size: 13px; }
      .sidenav-link.active { border-bottom-color: var(--blue-500); border-left-color: transparent; }
      .service-mini-grid { grid-template-columns: repeat(2,1fr); }
      .vendor-cards-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 600px) {
      .service-mini-grid { grid-template-columns: 1fr; }
      .cat-header { flex-direction: column; }
    }
  </style>
</head>
<body data-page="products">

<header id="site-header" role="banner"></header>

<!-- PAGE HERO -->
<section class="page-hero" aria-label="Products page hero">
  <div class="grid-pattern" aria-hidden="true"></div>
  <div class="mesh-bg" aria-hidden="true"></div>
  <div class="container page-hero__content" style="position:relative;z-index:2;">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <span class="sep">›</span>
      <span class="current">Products &amp; Solutions</span>
    </nav>
    <h1 class="t-display-lg">Products &amp; Solutions</h1>
    <p>Authorized reseller of world-class technology brands — delivering enterprise-grade backup, storage, cybersecurity, cloud, and managed IT solutions across the UAE.</p>
    <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:24px;">
      <span class="badge badge-navy" style="background:rgba(255,255,255,0.10);color:rgba(255,255,255,0.80);border:1px solid rgba(255,255,255,0.20);">✓ Authorized Partner</span>
      <span class="badge badge-navy" style="background:rgba(255,255,255,0.10);color:rgba(255,255,255,0.80);border:1px solid rgba(255,255,255,0.20);">✓ Genuine Products</span>
      <span class="badge badge-navy" style="background:rgba(255,255,255,0.10);color:rgba(255,255,255,0.80);border:1px solid rgba(255,255,255,0.20);">✓ Full Warranty</span>
      <span class="badge badge-navy" style="background:rgba(255,255,255,0.10);color:rgba(255,255,255,0.80);border:1px solid rgba(255,255,255,0.20);">✓ UAE-Based Support</span>
    </div>
  </div>
</section>

<main id="main-content">
<section class="section-pad">
  <div class="container">
    <div class="products-page-layout">

      <!-- Sticky Sidebar Nav -->
      <nav class="products-sidenav" aria-label="Product categories">
        <div class="sidenav-label">Categories</div>
        <a href="#cybersecurity" class="sidenav-link" data-section="cybersecurity">
          <span class="sidenav-icon">🛡️</span> Cybersecurity
        </a>
        <a href="#cloud" class="sidenav-link" data-section="cloud">
          <span class="sidenav-icon">☁️</span> Cloud &amp; M365
        </a>
        <a href="#backup" class="sidenav-link" data-section="backup">
          <span class="sidenav-icon">💾</span> Backup &amp; Recovery
        </a>
        <a href="#storage" class="sidenav-link" data-section="storage">
          <span class="sidenav-icon">🗄️</span> Storage Solutions
        </a>
        <a href="#infrastructure" class="sidenav-link" data-section="infrastructure">
          <span class="sidenav-icon">🖥️</span> IT Infrastructure
        </a>
        <a href="#managed" class="sidenav-link" data-section="managed">
          <span class="sidenav-icon">🔧</span> Managed IT
        </a>
      </nav>

      <!-- Main Content Area -->
      <div id="productsContent">

        <!-- CYBERSECURITY -->
        <section class="product-cat-section reveal" id="cybersecurity" aria-labelledby="cat-cyber">
          <div class="cat-header">
            <div class="cat-icon-wrap cat-icon-wrap--cyber">🛡️</div>
            <div class="cat-header-text">
              <div class="cat-tagline">Protect. Detect. Respond.</div>
              <h2 id="cat-cyber" class="cat-title">Cybersecurity Solutions</h2>
              <p class="cat-desc">Comprehensive cybersecurity solutions to defend your business against modern threats, ensuring data integrity and regulatory compliance across all systems.</p>
            </div>
          </div>

          <div class="service-mini-grid stagger">
            <div class="service-mini-card reveal">
              <div class="smc-icon">🔥</div>
              <div class="smc-name">Firewall Solutions</div>
              <div class="smc-desc">Next-generation firewall implementation and management protecting your entire network perimeter.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">💻</div>
              <div class="smc-name">Endpoint Security</div>
              <div class="smc-desc">Comprehensive protection for all endpoints including EDR, antivirus, and device management.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">📧</div>
              <div class="smc-name">Email Security</div>
              <div class="smc-desc">Advanced protection blocking phishing, malware, and business email compromise attacks.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">🔐</div>
              <div class="smc-name">Data Loss Prevention</div>
              <div class="smc-desc">DLP solutions monitoring and preventing unauthorized data exfiltration from your organization.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">🔍</div>
              <div class="smc-name">Security Audits</div>
              <div class="smc-desc">Comprehensive security assessments identifying vulnerabilities before attackers exploit them.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">📊</div>
              <div class="smc-name">SIEM Solutions</div>
              <div class="smc-desc">Real-time security information and event management for unified threat visibility.</div>
            </div>
          </div>

          <div style="margin-top:32px;padding:24px;background:linear-gradient(135deg,rgba(26,95,200,0.06),rgba(26,95,200,0.02));border-radius:var(--radius-md);border:1px solid rgba(26,95,200,0.12);">
            <strong style="font-size:15px;color:var(--text-primary);">Need a cybersecurity assessment?</strong>
            <p style="font-size:14px;color:var(--text-muted);margin-top:6px;margin-bottom:16px;">Our experts will evaluate your current security posture and recommend the right solutions for your business.</p>
            <a href="contact.php" class="btn btn-primary btn-sm">Request Security Assessment →</a>
          </div>
        </section>

        <!-- CLOUD & M365 -->
        <section class="product-cat-section reveal" id="cloud" aria-labelledby="cat-cloud">
          <div class="cat-header">
            <div class="cat-icon-wrap cat-icon-wrap--cloud">☁️</div>
            <div class="cat-header-text">
              <div class="cat-tagline">Migrate. Manage. Optimize.</div>
              <h2 id="cat-cloud" class="cat-title">Cloud &amp; Microsoft 365</h2>
              <p class="cat-desc">Seamlessly migrate to and manage cloud platforms with security and compliance at the forefront. Authorized Microsoft 365 reseller for UAE businesses.</p>
            </div>
          </div>

          <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:32px;">
            <div class="vendor-detail-card reveal">
              <div class="vdc-top">
                <div class="vdc-icon">📋</div>
                <div>
                  <div class="vdc-name">Microsoft 365</div>
                  <div class="vdc-type">Productivity Suite</div>
                </div>
              </div>
              <div class="vdc-desc">Complete productivity and collaboration suite with enterprise-grade security, compliance tools, and the Microsoft 365 ecosystem your team needs.</div>
              <div class="vdc-features">
                <div class="vdc-feature">Business Basic, Standard &amp; Premium plans</div>
                <div class="vdc-feature">Enterprise E1, E3 &amp; E5 licensing</div>
                <div class="vdc-feature">Microsoft Teams deployment</div>
                <div class="vdc-feature">SharePoint &amp; OneDrive for Business</div>
                <div class="vdc-feature">Microsoft Defender integration</div>
              </div>
              <div class="vdc-bottom-bar">
                <a href="contact.php" class="btn btn-primary btn-sm">Request Pricing →</a>
              </div>
            </div>
            <div class="vendor-detail-card reveal">
              <div class="vdc-top">
                <div class="vdc-icon">🚀</div>
                <div>
                  <div class="vdc-name">Cloud Migration</div>
                  <div class="vdc-type">Azure &amp; M365 Migration</div>
                </div>
              </div>
              <div class="vdc-desc">Expert-led migration of on-premises workloads to Azure and Microsoft 365 — planned, tested, and executed with minimal business disruption.</div>
              <div class="vdc-features">
                <div class="vdc-feature">Migration assessment &amp; planning</div>
                <div class="vdc-feature">Hybrid cloud architecture design</div>
                <div class="vdc-feature">Data migration with zero loss guarantee</div>
                <div class="vdc-feature">Post-migration optimization</div>
                <div class="vdc-feature">Ongoing cloud management</div>
              </div>
              <div class="vdc-bottom-bar">
                <a href="contact.php" class="btn btn-primary btn-sm">Book Consultation →</a>
              </div>
            </div>
          </div>
        </section>

        <!-- BACKUP & RECOVERY -->
        <section class="product-cat-section reveal" id="backup" aria-labelledby="cat-backup">
          <div class="cat-header">
            <div class="cat-icon-wrap cat-icon-wrap--backup">💾</div>
            <div class="cat-header-text">
              <div class="cat-tagline">Backup. Verify. Recover.</div>
              <h2 id="cat-backup" class="cat-title">Backup &amp; Recovery Solutions</h2>
              <p class="cat-desc">Enterprise-grade data backup and disaster recovery ensuring your critical business data is always protected, verifiable, and rapidly recoverable.</p>
            </div>
          </div>

          <div class="vendor-cards-grid">
            <div class="vendor-detail-card reveal">
              <div class="vdc-top">
                <div class="vdc-icon">💾</div>
                <div>
                  <div class="vdc-name">Acronis</div>
                  <div class="vdc-type">Cyber Protection Platform</div>
                </div>
              </div>
              <div class="vdc-desc">Acronis delivers world-class cyber protection by uniquely combining data backup and cybersecurity in a single, integrated solution trusted by millions worldwide.</div>
              <div class="vdc-features">
                <div class="vdc-feature">Full image backup &amp; bare metal recovery</div>
                <div class="vdc-feature">Cloud &amp; local backup options</div>
                <div class="vdc-feature">Ransomware protection with AI detection</div>
                <div class="vdc-feature">Microsoft 365 &amp; Google Workspace backup</div>
                <div class="vdc-feature">Centralized multi-tenant management</div>
                <div class="vdc-feature">Instant restore to any hardware or VM</div>
              </div>
              <div class="vdc-bottom-bar">
                <a href="contact.php" class="btn btn-primary btn-sm">Get Acronis Quote →</a>
              </div>
            </div>

            <div class="vendor-detail-card reveal">
              <div class="vdc-top">
                <div class="vdc-icon">🗄️</div>
                <div>
                  <div class="vdc-name">Veeam</div>
                  <div class="vdc-type">Data Backup &amp; Recovery</div>
                </div>
              </div>
              <div class="vdc-desc">Global leader in data backup and recovery for hybrid multi-cloud environments. Trusted by 82% of Fortune 500 companies to protect their most critical workloads.</div>
              <div class="vdc-features">
                <div class="vdc-feature">Virtual &amp; physical workload backup</div>
                <div class="vdc-feature">Multi-cloud backup (AWS, Azure, GCP)</div>
                <div class="vdc-feature">Instant VM recovery — seconds, not hours</div>
                <div class="vdc-feature">Immutable backups for ransomware protection</div>
                <div class="vdc-feature">Veeam ONE monitoring &amp; analytics</div>
                <div class="vdc-feature">RESTful API for automation</div>
              </div>
              <div class="vdc-bottom-bar">
                <a href="contact.php" class="btn btn-primary btn-sm">Get Veeam Quote →</a>
              </div>
            </div>

            <div class="vendor-detail-card reveal">
              <div class="vdc-top">
                <div class="vdc-icon">🔒</div>
                <div>
                  <div class="vdc-name">Veritas</div>
                  <div class="vdc-type">Enterprise Data Protection</div>
                </div>
              </div>
              <div class="vdc-desc">Enterprise data protection and availability solutions trusted by thousands of organizations worldwide for over 30 years. The industry standard for mission-critical environments.</div>
              <div class="vdc-features">
                <div class="vdc-feature">NetBackup enterprise backup</div>
                <div class="vdc-feature">Backup Exec for Windows environments</div>
                <div class="vdc-feature">Alta View — intelligent data insight</div>
                <div class="vdc-feature">High availability &amp; clustering</div>
                <div class="vdc-feature">Multi-cloud data management</div>
                <div class="vdc-feature">Compliance &amp; eDiscovery ready</div>
              </div>
              <div class="vdc-bottom-bar">
                <a href="contact.php" class="btn btn-primary btn-sm">Get Veritas Quote →</a>
              </div>
            </div>
          </div>
        </section>

        <!-- STORAGE -->
        <section class="product-cat-section reveal" id="storage" aria-labelledby="cat-storage">
          <div class="cat-header">
            <div class="cat-icon-wrap cat-icon-wrap--storage">🗄️</div>
            <div class="cat-header-text">
              <div class="cat-tagline">Store. Share. Scale.</div>
              <h2 id="cat-storage" class="cat-title">Storage Solutions</h2>
              <p class="cat-desc">Scalable network-attached storage and software-defined storage solutions from the world's leading NAS manufacturers — for businesses of every size.</p>
            </div>
          </div>

          <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;">
            <div class="vendor-detail-card reveal">
              <div class="vdc-top">
                <div class="vdc-icon">📦</div>
                <div>
                  <div class="vdc-name">Synology</div>
                  <div class="vdc-type">NAS &amp; Cloud Storage</div>
                </div>
              </div>
              <div class="vdc-desc">Synology specializes in network-attached storage providing an intuitive, feature-rich platform for businesses to centralize data, collaboration, backup, and surveillance.</div>
              <div class="vdc-features">
                <div class="vdc-feature">DiskStation NAS — SME &amp; Enterprise</div>
                <div class="vdc-feature">Synology Drive — private cloud server</div>
                <div class="vdc-feature">Surveillance Station for IP cameras</div>
                <div class="vdc-feature">High-availability cluster support</div>
                <div class="vdc-feature">Hybrid cloud backup integration</div>
                <div class="vdc-feature">Active Backup Suite — free license</div>
              </div>
              <div class="vdc-bottom-bar">
                <a href="contact.php" class="btn btn-primary btn-sm">Get Synology Quote →</a>
              </div>
            </div>

            <div class="vendor-detail-card reveal">
              <div class="vdc-top">
                <div class="vdc-icon">🖧</div>
                <div>
                  <div class="vdc-name">QNAP</div>
                  <div class="vdc-type">Smart Storage &amp; Edge Computing</div>
                </div>
              </div>
              <div class="vdc-desc">QNAP delivers high-performance NAS solutions combining powerful storage with networking, virtualization, and edge computing capabilities for maximum flexibility.</div>
              <div class="vdc-features">
                <div class="vdc-feature">TurboNAS enterprise NAS systems</div>
                <div class="vdc-feature">QuTS Hero — ZFS-based enterprise OS</div>
                <div class="vdc-feature">Software Defined Storage (SDS)</div>
                <div class="vdc-feature">Virtualization Station for VMs</div>
                <div class="vdc-feature">10GbE &amp; high-speed networking</div>
                <div class="vdc-feature">WORM storage for compliance</div>
              </div>
              <div class="vdc-bottom-bar">
                <a href="contact.php" class="btn btn-primary btn-sm">Get QNAP Quote →</a>
              </div>
            </div>
          </div>
        </section>

        <!-- IT INFRASTRUCTURE -->
        <section class="product-cat-section reveal" id="infrastructure" aria-labelledby="cat-infra">
          <div class="cat-header">
            <div class="cat-icon-wrap cat-icon-wrap--infra">🖥️</div>
            <div class="cat-header-text">
              <div class="cat-tagline">Design. Deploy. Support.</div>
              <h2 id="cat-infra" class="cat-title">IT Infrastructure &amp; Hardware</h2>
              <p class="cat-desc">End-to-end IT infrastructure design, procurement, deployment, and ongoing support forming the reliable backbone of your business operations.</p>
            </div>
          </div>

          <div class="service-mini-grid stagger">
            <div class="service-mini-card reveal">
              <div class="smc-icon">🖥️</div>
              <div class="smc-name">Server Solutions</div>
              <div class="smc-desc">Enterprise server procurement, deployment, and management for all workload types.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">🌐</div>
              <div class="smc-name">Network Design</div>
              <div class="smc-desc">LAN/WAN design, implementation, and optimization for peak performance and security.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">💻</div>
              <div class="smc-name">Workstation Supply</div>
              <div class="smc-desc">Business-grade workstation and laptop procurement with full warranty and support.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">⚡</div>
              <div class="smc-name">UPS &amp; Power</div>
              <div class="smc-desc">Uninterruptible power supply solutions protecting your infrastructure from outages.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">🔌</div>
              <div class="smc-name">Structured Cabling</div>
              <div class="smc-desc">Professional structured cabling design and installation for modern business environments.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">🛒</div>
              <div class="smc-name">IT Procurement</div>
              <div class="smc-desc">Competitive pricing on all major IT brands with genuine products and full manufacturer warranty.</div>
            </div>
          </div>
        </section>

        <!-- MANAGED IT -->
        <section class="product-cat-section reveal" id="managed" aria-labelledby="cat-managed">
          <div class="cat-header">
            <div class="cat-icon-wrap cat-icon-wrap--managed">🔧</div>
            <div class="cat-header-text">
              <div class="cat-tagline">Monitor. Support. Optimize.</div>
              <h2 id="cat-managed" class="cat-title">Managed IT Services</h2>
              <p class="cat-desc">Proactive IT management keeping your systems healthy, secure, and optimized — so you can focus entirely on growing your business.</p>
            </div>
          </div>

          <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-bottom:32px;">
            <div style="background:var(--navy-900);border-radius:var(--radius-lg);padding:36px 32px;border:1px solid rgba(255,255,255,0.08);">
              <div style="font-size:28px;margin-bottom:16px;">👁️</div>
              <div style="font-size:16px;font-weight:700;color:var(--brand-white);margin-bottom:10px;">24/7 Proactive Monitoring</div>
              <div style="font-size:14px;color:rgba(255,255,255,0.60);line-height:1.75;">Round-the-clock system monitoring with instant alerting and escalation protocols ensuring issues are caught before they become problems.</div>
            </div>
            <div style="background:linear-gradient(135deg,var(--blue-600),var(--blue-500));border-radius:var(--radius-lg);padding:36px 32px;">
              <div style="font-size:28px;margin-bottom:16px;">⚡</div>
              <div style="font-size:16px;font-weight:700;color:var(--brand-white);margin-bottom:10px;">Fast Response SLA</div>
              <div style="font-size:14px;color:rgba(255,255,255,0.80);line-height:1.75;">Guaranteed response times with escalation procedures — remote and onsite support from certified engineers who know your environment.</div>
            </div>
          </div>

          <div class="service-mini-grid stagger">
            <div class="service-mini-card reveal">
              <div class="smc-icon">🖥️</div>
              <div class="smc-name">Remote Support</div>
              <div class="smc-desc">Expert remote support with fast response and first-call resolution targets.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">🤝</div>
              <div class="smc-name">Onsite Support</div>
              <div class="smc-desc">Scheduled and emergency onsite visits by our certified technical engineers.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">🔄</div>
              <div class="smc-name">Patch Management</div>
              <div class="smc-desc">Automated patch management ensuring all systems are current and secure.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">💾</div>
              <div class="smc-name">Backup Monitoring</div>
              <div class="smc-desc">Proactive backup verification ensuring recovery capability is always guaranteed.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">📋</div>
              <div class="smc-name">IT Strategy</div>
              <div class="smc-desc">Technology roadmap planning aligned with your business growth objectives.</div>
            </div>
            <div class="service-mini-card reveal">
              <div class="smc-icon">📊</div>
              <div class="smc-name">Monthly Reporting</div>
              <div class="smc-desc">Detailed monthly reports on system health, incidents, and performance metrics.</div>
            </div>
          </div>

          <div style="margin-top:32px;text-align:center;padding:40px;background:var(--brand-surface);border-radius:var(--radius-lg);border:1px solid var(--border-light);">
            <h3 style="font-family:'Playfair Display',serif;font-size:24px;margin-bottom:12px;">Ready to Simplify Your IT?</h3>
            <p style="color:var(--text-muted);max-width:480px;margin:0 auto 24px;font-size:15px;line-height:1.75;">Let our expert team manage your IT infrastructure while you focus on what matters most — growing your business.</p>
            <a href="contact.php" class="btn btn-primary">Request Managed IT Proposal →</a>
          </div>
        </section>

      </div><!-- /productsContent -->
    </div><!-- /products-page-layout -->
  </div>
</section>

<!-- CTA -->
<section class="cta-section section-pad-sm">
  <div class="grid-pattern" aria-hidden="true"></div>
  <div class="container" style="position:relative;z-index:2;">
    <div class="reveal" style="text-align:center;max-width:600px;margin:0 auto;">
      <h2 class="t-display-sm" style="color:var(--brand-white);margin-bottom:16px;">Need Help Choosing the Right Solution?</h2>
      <p>Our expert team will assess your requirements and recommend the best technology for your business.</p>
      <div class="cta-actions" style="margin-top:28px;">
        <a href="contact.php" class="btn btn-gold btn-lg">Talk to an Expert</a>
        <a href="about.php" class="btn btn-ghost">Learn About Us</a>
      </div>
    </div>
  </div>
</section>
</main>

<footer id="site-footer" class="site-footer"></footer>
<button id="back-top" aria-label="Back to top">
  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M8 14V2M3 7l5-5 5 5"/></svg>
</button>

<script src="assets/js/products-data.js" defer></script>
<script src="assets/js/site.js" defer></script>
<script>
// Active sidenav link on scroll
document.addEventListener('DOMContentLoaded', () => {
  const sections = document.querySelectorAll('.product-cat-section');
  const navLinks = document.querySelectorAll('.sidenav-link');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        navLinks.forEach(l => l.classList.remove('active'));
        const id = entry.target.getAttribute('id');
        const active = document.querySelector(`.sidenav-link[data-section="${id}"]`);
        if (active) active.classList.add('active');
      }
    });
  }, { rootMargin: '-20% 0px -70% 0px' });

  sections.forEach(s => observer.observe(s));
});
</script>
<style>
  @media (max-width:900px) {
    [style*="grid-template-columns:1fr 1fr"]:not(.service-mini-grid) {
      grid-template-columns:1fr!important;
    }
    .vendor-cards-grid { grid-template-columns:1fr!important; }
  }
</style>
</body>
</html>
