import './bootstrap';
import 'preline';

function initPrelineIfReady() {
    if (window.HSStaticMethods && typeof window.HSStaticMethods.autoInit === 'function') {
        window.HSStaticMethods.autoInit();
    } else {
        console.warn('HSStaticMethods not ready');
    }
}

// عند تحميل الصفحة أول مرة
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(initPrelineIfReady, 100);
});

// عند التنقل باستخدام Inertia أو Livewire
document.addEventListener('livewire:navigated', () => {
    setTimeout(initPrelineIfReady, 100);
});

// دعم لأي تغييرات ديناميكية
const observer = new MutationObserver(() => {
    initPrelineIfReady();
});
observer.observe(document.body, { childList: true, subtree: true });
