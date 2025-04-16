function animateCounters() {
    const counters = document.querySelectorAll('[data-target]');
    const speed = 200;
    
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;
      const increment = target / speed;
      
      if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(animateCounters, 1);
      } else {
        counter.innerText = target + '+';
      }
    });
  }
  
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top <= window.innerHeight &&
      rect.bottom >= 0
    );
  }
  
  export function initCounters() {
    window.addEventListener('scroll', function() {
      const metrics = document.querySelector('.metric-counter');
      if (metrics && isElementInViewport(metrics)) {
        animateCounters();
        this.removeEventListener('scroll', arguments.callee);
      }
    });
  }