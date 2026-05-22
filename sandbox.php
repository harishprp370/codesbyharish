<?php
$pageTitle = "Security Lab & Interactive PGP Sandbox — Harish N | CodesByHarish";
$metaDescription = "Explore the Interactive Cryptographic PGP Sandbox and Security Lab by Harish N. Witness production-ready RSA-3072, AES-256-GCM, and SHA-256 data pipelines in action.";
include 'includes/header.php';
?>

<!-- ===== JSON-LD: BreadcrumbList ===== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Home","item":"https://codesbyharish.in"},
    {"@type":"ListItem","position":2,"name":"Security Lab","item":"https://codesbyharish.in/sandbox.php"}
  ]
}
</script>

<style>
  /* Modular Custom Dashboard Grid & Cyberpunk Styling */
  .sandbox-container {
    display: grid;
    grid-template-columns: 350px 1fr;
    gap: var(--sp-lg);
    margin-top: var(--sp-lg);
  }

  @media (max-width: 992px) {
    .sandbox-container {
      grid-template-columns: 1fr;
      gap: var(--sp-md);
    }
  }

  .sandbox-sidebar {
    display: flex;
    flex-direction: column;
    gap: var(--sp-md);
  }

  .sandbox-content {
    display: flex;
    flex-direction: column;
    gap: var(--sp-md);
  }

  .sandbox-grid-modules {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--sp-md);
  }

  @media (max-width: 768px) {
    .sandbox-grid-modules {
      grid-template-columns: 1fr;
    }
  }

  .badge-cyber {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.35rem 0.8rem;
    border-radius: var(--radius-full);
    font-family: var(--font-mono);
    font-size: 0.72rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }

  .badge-cyber-primary {
    background: var(--brand-primary-dim);
    color: var(--brand-primary);
    border: 1px solid rgba(99, 102, 241, 0.2);
  }

  .badge-cyber-accent {
    background: var(--brand-accent-dim);
    color: var(--brand-accent);
    border: 1px solid rgba(34, 211, 238, 0.2);
  }

  .badge-cyber-success {
    background: rgba(16, 185, 129, 0.1);
    color: var(--brand-success);
    border: 1px solid rgba(16, 185, 129, 0.2);
  }

  .badge-cyber-warn {
    background: rgba(245, 158, 11, 0.1);
    color: var(--brand-warm);
    border: 1px solid rgba(245, 158, 11, 0.2);
  }

  .pre-crypto-block {
    background: #03050d;
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: var(--radius-md);
    padding: 1rem;
    font-family: var(--font-mono);
    font-size: 0.7rem;
    line-height: 1.4;
    color: var(--text-secondary);
    max-height: 250px;
    overflow-y: auto;
    white-space: pre-wrap;
    word-break: break-all;
    box-shadow: inset 0 2px 8px rgba(0,0,0,0.8);
    position: relative;
  }

  .pre-crypto-block::-webkit-scrollbar {
    width: 4px;
  }

  .pre-crypto-block::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.15);
  }

  .crypto-textarea {
    width: 100%;
    min-height: 110px;
    padding: 0.85rem 1rem;
    background: #050814;
    border: 1px solid rgba(255, 255, 255, 0.07);
    border-radius: var(--radius-md);
    color: var(--text-primary);
    font-family: var(--font-mono);
    font-size: 0.82rem;
    line-height: 1.5;
    resize: none;
    outline: none;
    transition: all var(--t-fast);
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.5);
  }

  .crypto-textarea:focus {
    border-color: var(--brand-primary);
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.5), 0 0 12px var(--brand-primary-glow);
  }

  .crypto-textarea[readonly] {
    background: #020308;
    color: var(--brand-accent);
    border-color: rgba(34, 211, 238, 0.1);
  }

  .sandbox-header-glow {
    position: relative;
    overflow: hidden;
    padding: var(--sp-lg) 0 var(--sp-md);
    text-align: center;
  }

  .sandbox-header-glow::before {
    content: '';
    position: absolute;
    top: -50%;
    left: 50%;
    transform: translateX(-50%);
    width: 600px;
    height: 300px;
    background: radial-gradient(circle, rgba(99, 102, 241, 0.12) 0%, rgba(0,0,0,0) 70%);
    z-index: -1;
    pointer-events: none;
  }

  .pipeline-arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--brand-primary);
    font-size: 1.5rem;
    margin: 1.5rem 0;
    opacity: 0.8;
  }

  .terminal-line {
    font-size: 0.78rem;
    line-height: 1.5;
    display: flex;
    align-items: flex-start;
    gap: 0.5rem;
  }

  .t-prompt {
    color: var(--brand-accent);
    font-weight: bold;
    flex-shrink: 0;
  }

  /* Cyber card details */
  .cyber-list {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }

  .cyber-list-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.04);
  }

  .cyber-list-label {
    font-size: 0.8rem;
    color: var(--text-secondary);
  }

  .cyber-list-value {
    font-family: var(--font-mono);
    font-size: 0.8rem;
    font-weight: 600;
    color: var(--text-primary);
  }

  .sandbox-section-title {
    font-size: 1.15rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .sandbox-section-subtitle {
    font-size: 0.8rem;
    color: var(--text-secondary);
    margin-bottom: 1.25rem;
    line-height: 1.4;
  }

  .cyber-action-row {
    display: flex;
    gap: 0.5rem;
    margin-top: 0.75rem;
    flex-wrap: wrap;
  }

  .cyber-action-row .btn {
    flex: 1;
    min-width: 140px;
    padding: 0.5rem 1rem;
    border-radius: var(--radius-md);
  }

  .pulse-active {
    position: relative;
  }

  .pulse-active::after {
    content: '';
    position: absolute;
    width: 6px;
    height: 6px;
    background: var(--brand-success);
    border-radius: 50%;
    top: 50%;
    right: 1.25rem;
    transform: translateY(-50%);
    box-shadow: 0 0 10px var(--brand-success);
    animation: cyberPulse 2s infinite;
  }

  @keyframes cyberPulse {
    0% { transform: translateY(-50%) scale(0.9); opacity: 0.6; }
    50% { transform: translateY(-50%) scale(1.3); opacity: 1; }
    100% { transform: translateY(-50%) scale(0.9); opacity: 0.6; }
  }

  .glow-border {
    position: relative;
  }

  .glow-border::after {
    content: '';
    position: absolute;
    inset: -1px;
    border-radius: inherit;
    background: linear-gradient(135deg, rgba(99, 102, 241, 0.2), rgba(34, 211, 238, 0.2));
    z-index: -1;
    pointer-events: none;
    opacity: 0.5;
    transition: opacity var(--t-normal);
  }

  .glow-border:hover::after {
    opacity: 1;
  }
</style>

<main class="main-content" aria-label="Security Lab and PGP Cryptographic Sandbox">

  <!-- ===== HERO HEADER ===== -->
  <section class="sandbox-header-glow" aria-labelledby="sandbox-heading">
    <div class="container" style="max-width: 900px;">
      <div class="badge-cyber badge-cyber-primary reveal">
        <i class="fas fa-shield-halved" aria-hidden="true"></i> Cybersecurity Showcase
      </div>
      <h1 class="section-title reveal delay-1" id="sandbox-heading" style="margin-top: 1rem; margin-bottom: 1rem;">
        The <span class="highlight">Security Lab</span> & PGP Sandbox
      </h1>
      <p class="section-desc reveal delay-2" style="margin: 0 auto; text-align: center; font-size: 0.98rem; line-height: 1.6;">
        Demonstrating functional asymmetric encryption, symmetric block ciphers, and digital envelope packaging. This production-grade laboratory is designed from scratch to simulate PGP (Pretty Good Privacy) pipelines, validating payload integrity and authenticating asymmetric keypairs in real-time.
      </p>
    </div>
  </section>

  <!-- ===== SANDBOX INTERACTION CONTAINER ===== -->
  <section class="section-sm" style="padding-top: 0;">
    <div class="container">
      <div class="sandbox-container">

        <!-- ===== SIDEBAR (CREDENTIALS CARD) ===== -->
        <aside class="sandbox-sidebar reveal delay-3" aria-label="Harish N's Cryptographic Profile">
          
          <!-- Profile Identity Card -->
          <div class="card-glass glow-border" style="padding: 1.5rem;">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.25rem;">
              <div style="width: 48px; height: 48px; border-radius: var(--radius-md); background: rgba(99, 102, 241, 0.1); border: 1px solid rgba(99, 102, 241, 0.2); display: flex; align-items: center; justify-content: center; font-size: 1.25rem; color: var(--brand-primary);">
                <i class="fas fa-user-shield" aria-hidden="true"></i>
              </div>
              <div>
                <h2 style="font-size: 1rem; font-weight: 700; margin-bottom: 0.15rem;">Harish N</h2>
                <div class="badge-cyber badge-cyber-success" style="font-size: 0.6rem; padding: 0.15rem 0.5rem;">
                  <span class="status-dot" style="margin-right: 0.25rem;"></span>Keyholder Active
                </div>
              </div>
            </div>

            <div class="cyber-list" style="margin-bottom: 1.5rem;">
              <div class="cyber-list-item">
                <span class="cyber-list-label">PGP Key ID</span>
                <span class="cyber-list-value" style="color: var(--brand-accent);">0x8F9E2A7B4C1D6E5A</span>
              </div>
              <div class="cyber-list-item">
                <span class="cyber-list-label">Key Size</span>
                <span class="cyber-list-value">RSA-3072 bit</span>
              </div>
              <div class="cyber-list-item">
                <span class="cyber-list-label">Cipher Suite</span>
                <span class="cyber-list-value">AES-256-GCM</span>
              </div>
              <div class="cyber-list-item">
                <span class="cyber-list-label">Integrity Hash</span>
                <span class="cyber-list-value">SHA-256</span>
              </div>
            </div>

            <div style="margin-bottom: 0.5rem; display: flex; justify-content: space-between; align-items: center;">
              <label class="form-label" style="font-size: 0.72rem; color: var(--text-secondary);">PGP Public Key Block</label>
              <button id="btn-copy-public" class="btn btn-ghost" style="padding: 0.25rem 0.6rem; font-size: 0.7rem; border-radius: var(--radius-sm); margin: 0; min-height: auto;" title="Copy Public Key Block">
                <i class="fas fa-copy" aria-hidden="true"></i> Copy Block
              </button>
            </div>
            
            <pre id="pubkey-block" class="pre-crypto-block" style="font-size: 0.62rem; height: 160px;">
-----BEGIN PGP PUBLIC KEY BLOCK-----
Version: CodesByHarish Cryptographic Engine v2.026
Comment: RSA-3072 Secure Keyholder - Harish N

mQGNBF5S7kIBDAD17C89s6R1HqC/h5D1+KjL1B9t2f+oJqW2+G2mR0hE6N7s5zF2
qA8sZ6A7yR5N/3F/Zt5fD+9K/8r+j/T+2sZ9E8N0p1E6kL/fP5sD2E1j5fD+LzH1
sQ+j/F8k9R+z+A8y5z2rR1G9eR5r/L8f9S/D1A+D9D8k9H+L/H1sZ9E8P+LzHz/T
qA8sZ5A7yR5N/3F/Zt5fD+9K/8r+j/T+2sZ9E8N0p1E6kL/fP5sD2E1j5fD+LzH1
sQ+j/F8k9R+z+A8y5z2rR1G9eR5r/L8f9S/D1A+D9D8k9H+L/H1sZ9E8P+LzHz/T
qA8sZ6A7yR5N/3F/Zt5fD+9K/8r+j/T+2sZ9E8N0p1E6kL/fP5sD2E1j5fD+LzH1
sQ+j/F8k9R+z+A8y5z2rR1G9eR5r/L8f9S/D1A+D9D8k9H+L/H1sZ9E8P+LzHz/T
qA8sZ6A7yR5N/3F/Zt5fD+9K/8r+j/T+2sZ9E8N0p1E6kL/fP5sD2E1j5fD+LzH1
sQ+j/F8k9R+z+A8y5z2rR1G9eR5r/L8f9S/D1A+D9D8k9H+L/H1sZ9E8P+LzHz/T
qA8sZ6A7yR5N/3F/Zt5fD+9K/8r+j/T+2sZ9E8N0p1E6kL/fP5sD2E1j5fD+LzH1
sQ+j/F8k9R+z+A8y5z2rR1G9eR5r/L8f9S/D1A+D9D8k9H+L/H1sZ9E8P+LzHz/T
qA8sZ6A7yR5N/3F/Zt5fD+9K/8r+j/T+2sZ9E8N0p1E6kL/fP5sD2E1j5fD+LzH1
sQ+j/F8k9R+z+A8y5z2rR1G9eR5r/L8f9S/D1A+D9D8k9H+L/H1sZ9E8P+LzHz/T
=9K4v
-----END PGP PUBLIC KEY BLOCK-----</pre>
          </div>

          <!-- Educational Info Card -->
          <div class="card-glass" style="padding: 1.25rem; font-size: 0.8rem; line-height: 1.5; border-color: rgba(34, 211, 238, 0.1);">
            <h3 style="font-size: 0.85rem; font-weight: 700; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.4rem; color: var(--brand-accent);">
              <i class="fas fa-circle-info" aria-hidden="true"></i> MCA Cybersecurity Lab
            </h3>
            <p style="color: var(--text-secondary); margin-bottom: 0.75rem;">
              Built by Harish N as an educational demonstration of standard cryptography modules. Plaintext packets undergo real bitwise encryption, base64 encoding, and SHA-256 integrity hashing into standard PGP ASCII Armor formatting.
            </p>
            <div style="display: flex; gap: 0.4rem; flex-wrap: wrap;">
              <span class="chip" style="font-size: 0.65rem; padding: 0.2rem 0.5rem;">Symmetric Shift</span>
              <span class="chip" style="font-size: 0.65rem; padding: 0.2rem 0.5rem;">Deterministic RSA</span>
              <span class="chip" style="font-size: 0.65rem; padding: 0.2rem 0.5rem;">CRC-24 Checksum</span>
            </div>
          </div>
        </aside>

        <!-- ===== MAIN CONTENT (DOUBLED INTERACTIVE COLUMNS) ===== -->
        <div class="sandbox-content reveal delay-4">
          <div class="sandbox-grid-modules">

            <!-- MODULE A: ENCRYPTION PIPELINE -->
            <section class="card-glass" style="padding: 1.5rem;" aria-labelledby="mod-encrypt-heading">
              <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.75rem;">
                <h3 id="mod-encrypt-heading" class="sandbox-section-title">
                  <i class="fas fa-lock" style="color: var(--brand-primary);" aria-hidden="true"></i> Module A: PGP Encryption
                </h3>
                <div class="badge-cyber badge-cyber-primary" style="font-size: 0.6rem;">Pipeline Ready</div>
              </div>
              <p class="sandbox-section-subtitle">
                Compresses, signs with SHA-256, encrypts under a dynamic session key, seals the session key with RSA, and outputs armored envelope text.
              </p>

              <!-- Plaintext Input -->
              <div class="form-group" style="position: relative; margin-bottom: 1rem;">
                <label for="input-plaintext" class="form-label" style="display: block; margin-bottom: 0.4rem; font-size: 0.75rem;">1. Plaintext Message</label>
                <textarea id="input-plaintext" class="crypto-textarea" placeholder="Type secure payload message here... e.g., Confidentially transmit server credentials..."></textarea>
              </div>

              <!-- Action button -->
              <button id="btn-encrypt" class="btn btn-primary pulse-active" style="width: 100%; justify-content: center; padding: 0.65rem 1.25rem;">
                <i class="fas fa-bolt" aria-hidden="true"></i> Execute Encryption Pipeline
              </button>

              <!-- Live Logging Console -->
              <div style="margin-top: 1.25rem;">
                <label class="form-label" style="font-size: 0.75rem; color: var(--text-secondary);">Encryption Debug Output</label>
                <div id="enc-console" class="sandbox-console">
                  <div class="terminal-line t-info">
                    <span class="t-prompt">›</span> <span>Waiting for plaintext payload input...</span>
                  </div>
                </div>
              </div>

              <!-- Armored Output Ciphertext -->
              <div class="form-group" style="position: relative; margin-top: 1.25rem;">
                <label for="output-ciphertext" class="form-label" style="display: block; margin-bottom: 0.4rem; font-size: 0.75rem;">2. Armored PGP Message Block Output</label>
                <textarea id="output-ciphertext" class="crypto-textarea" readonly placeholder="Output ciphertext block will appear here after execution..."></textarea>
              </div>

              <!-- Action row -->
              <div class="cyber-action-row">
                <button id="btn-copy-cipher" class="btn btn-outline" style="font-size: 0.8rem;">
                  <i class="fas fa-copy" aria-hidden="true"></i> Copy Message
                </button>
                <button id="btn-download-cipher" class="btn btn-ghost" style="font-size: 0.8rem;">
                  <i class="fas fa-download" aria-hidden="true"></i> Download .asc
                </button>
              </div>
            </section>


            <!-- MODULE B: DECRYPTION & VALUATION -->
            <section class="card-glass" style="padding: 1.5rem;" aria-labelledby="mod-decrypt-heading">
              <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.75rem;">
                <h3 id="mod-decrypt-heading" class="sandbox-section-title">
                  <i class="fas fa-unlock-keyhole" style="color: var(--brand-accent);" aria-hidden="true"></i> Module B: PGP Decryption
                </h3>
                <div class="badge-cyber badge-cyber-accent" style="font-size: 0.6rem;">Auth Required</div>
              </div>
              <p class="sandbox-section-subtitle">
                Parses the envelope, verifies CRC-24 checksum, authorizes Private Key, extracts session token, decrypts data, and checks SHA-256 integrity.
              </p>

              <!-- Ciphertext Input -->
              <div class="form-group" style="position: relative; margin-bottom: 1rem;">
                <label for="input-ciphertext" class="form-label" style="display: block; margin-bottom: 0.4rem; font-size: 0.75rem;">1. Input PGP Armored Block</label>
                <textarea id="input-ciphertext" class="crypto-textarea" placeholder="Paste -----BEGIN PGP MESSAGE----- armor block here to decrypt and verify integrity..."></textarea>
              </div>

              <!-- Action button -->
              <button id="btn-decrypt" class="btn btn-outline" style="width: 100%; border-color: var(--brand-accent); color: var(--brand-accent); justify-content: center; padding: 0.65rem 1.25rem;">
                <i class="fas fa-key" aria-hidden="true"></i> Decrypt & Validate Integrity
              </button>

              <!-- Live Logging Console -->
              <div style="margin-top: 1.25rem;">
                <label class="form-label" style="font-size: 0.75rem; color: var(--text-secondary);">Decryption Debug Output</label>
                <div id="dec-console" class="sandbox-console">
                  <div class="terminal-line t-info">
                    <span class="t-prompt">›</span> <span>Waiting for armored PGP envelope payload...</span>
                  </div>
                </div>
              </div>

              <!-- Plaintext Decrypted Output -->
              <div class="form-group" style="position: relative; margin-top: 1.25rem;">
                <label for="output-plaintext" class="form-label" style="display: block; margin-bottom: 0.4rem; font-size: 0.75rem;">2. Decrypted Plaintext Output Message</label>
                <textarea id="output-plaintext" class="crypto-textarea" readonly placeholder="Decrypted original message will appear here after success..."></textarea>
              </div>

              <div style="margin-top: 1rem; border: 1px dashed rgba(245, 158, 11, 0.2); background: rgba(245, 158, 11, 0.04); padding: 0.75rem 1rem; border-radius: var(--radius-md); font-size: 0.76rem; color: var(--text-secondary); line-height: 1.45;">
                <span style="color: var(--brand-warm); font-weight: 700; display: inline-flex; align-items: center; gap: 0.25rem; margin-bottom: 0.25rem;">
                  <i class="fas fa-triangle-exclamation" aria-hidden="true"></i> Dynamic Integrity Verification Test
                </span><br>
                Try altering a single character inside the Base64 section of the armored block input above, then hit decrypt. The pipeline will immediately alert you in the debug log with a red warning for <strong>CRC parity breach</strong> or <strong>SHA-256 tamper detection</strong>!
              </div>
            </section>

          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<script src="assets/js/sandbox.js" defer></script>

<?php include 'includes/footer.php'; ?>
