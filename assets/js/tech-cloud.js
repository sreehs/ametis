export function initTechCloud() {
    const cloud = document.querySelector('.tech-cloud');
    if (!cloud) return;
  
    const tags = document.querySelectorAll('.tech-tag');
    
    tags.forEach(tag => {
      const value = parseInt(tag.getAttribute('data-value'));
      const angle = (value / tags.length) * Math.PI * 2;
      const distance = 50 + (value % 3) * 20;
      
      tag.style.transform = `
        translate(
          ${Math.cos(angle) * distance}px,
          ${Math.sin(angle) * distance}px
        )
        scale(${0.8 + (value % 3) * 0.1})
      `;
      
      tag.addEventListener('mouseenter', () => {
        tag.style.transform += ' rotate(5deg)';
      });
      
      tag.addEventListener('mouseleave', () => {
        tag.style.transform = tag.style.transform.replace(' rotate(5deg)', '');
      });
    });
  }