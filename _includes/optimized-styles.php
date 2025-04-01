<?php
/**
 * Estilos optimizados para WhatsApp Widget
 */
?>
<link rel="preconnect" href="https://cdnjs.cloudflare.com">
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>

<style>
.whatsapp-widget {
    position: fixed;
    bottom: 1.5rem;
    right: 1.5rem;
    z-index: 50;
}
.whatsapp-button {
    display: block;
    width: 4rem;
    height: 4rem;
    border-radius: 9999px;
    background-color: #25D366;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: pulse 2s infinite;
    will-change: transform;
}
.whatsapp-button:hover {
    background-color: #128C7E;
    transform: scale(1.05);
}
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}
</style>