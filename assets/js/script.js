/**
 * ametis Main JavaScript File
 * Contains all site-wide functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initRotatingSubheadline();
    initScrollAnimations();
    triggerAnimations();
    initBackToTopButton();
    initMobileMenu();
    initSmoothScrolling();
    
    // Force scroll to top on initial load
    window.scrollTo(0, 0);
  });
  
  /**
   * Initialize Rotating Subheadline Text
   */
  function initRotatingSubheadline() {
    const rotatingSubheadline = document.querySelector('.rotating-subheadline');
    if (!rotatingSubheadline) return;
  
    const messages = rotatingSubheadline.querySelectorAll('span');
    if (messages.length > 0) {
      messages[0].style.opacity = 1;
    }
  }
  
  /**
   * Initialize Scroll Animations with Intersection Observer
   */
  function initScrollAnimations() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.animationPlayState = 'running';
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });
  
    document.querySelectorAll('[class*="animate-"]').forEach(el => {
      observer.observe(el);
    });
  }
  
  /**
   * Trigger animations for elements already in view on load
   */
  function triggerAnimations() {
    const animatedElements = document.querySelectorAll('[class*="animate-"]');
    const triggerBottom = window.innerHeight * 0.8;
  
    animatedElements.forEach(el => {
      const elementTop = el.getBoundingClientRect().top;
      if (elementTop < triggerBottom) {
        el.style.animationPlayState = 'running';
      }
    });
  }
  
  /**
   * Initialize Back to Top Button
   */
  function initBackToTopButton() {
    const backToTopButton = document.createElement('button');
    backToTopButton.className = 'back-to-top';
    backToTopButton.innerHTML = '↑';
    backToTopButton.setAttribute('aria-label', 'Back to top');
    document.body.appendChild(backToTopButton);
  
    // Show/hide based on scroll position
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 300) {
        backToTopButton.classList.add('show');
      } else {
        backToTopButton.classList.remove('show');
      }
    });
  
    // Smooth scroll to top
    backToTopButton.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }
  
  /**
   * Initialize Mobile Menu Functionality
   */
  function initMobileMenu() {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileNav = document.querySelector('.mobile-nav');
    const mainNav = document.querySelector('.main-nav');
  
    if (mobileMenuButton && mobileNav) {
      mobileMenuButton.addEventListener('click', function() {
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !isExpanded);
        mobileNav.classList.toggle('hidden');
        mobileNav.classList.toggle('active');
        
        // Toggle main nav for mobile if it exists
        if (mainNav) {
          mainNav.classList.toggle('active');
        }
      });
  
      // Close menu when clicking outside
      document.addEventListener('click', function(event) {
        if (!event.target.closest('.mobile-menu-button') && 
            !event.target.closest('.mobile-nav')) {
          mobileMenuButton.setAttribute('aria-expanded', 'false');
          mobileNav.classList.add('hidden');
          mobileNav.classList.remove('active');
          
          if (mainNav) {
            mainNav.classList.remove('active');
          }
        }
      });
  
      // Close menu when a link is clicked
      document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', () => {
          mobileMenuButton.setAttribute('aria-expanded', 'false');
          mobileNav.classList.add('hidden');
          mobileNav.classList.remove('active');
          
          if (mainNav) {
            mainNav.classList.remove('active');
          }
        });
      });
    }
  }
  
  /**
   * Initialize Smooth Scrolling for Anchor Links
   */
  function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 80,
            behavior: 'smooth'
          });
          
          // Close mobile menu if open
          const mobileNav = document.querySelector('.mobile-nav');
          if (mobileNav && mobileNav.classList.contains('active')) {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
            mobileNav.classList.add('hidden');
            mobileNav.classList.remove('active');
          }
        }
      });
    });
  }
  
  /**
   * Force scroll to top on page refresh
   */
  window.onbeforeunload = function() {
    window.scrollTo(0, 0);
  };
  
  /**
   * Add focus styles for keyboard navigation
   */
  document.addEventListener('keyup', function(e) {
    if (e.key === 'Tab') {
      document.documentElement.classList.add('keyboard-navigation');
    }
  });
  
  document.addEventListener('mousedown', function() {
    document.documentElement.classList.remove('keyboard-navigation');
  });