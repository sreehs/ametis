<head>
  <!-- Existing meta tags -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/animations.css">
  <link rel="stylesheet" href="css/components.css">
</head>
<?php
// Force scroll to top on page refresh
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
include 'header.php'; 
?>

<main>


  <!-- Hero Section -->

  <section class="hero bg-gray-100 py-20 text-center animate-fade-in">
  <div class="container mx-auto px-4">
    <h1 class="text-4xl md:text-6xl font-bold mb-6 tracking-tight leading-tight">
      Delivering Quality That Moves With Your Business
    </h1>
    
    <div class="rotating-subheadline text-xl md:text-2xl text-[#6c757d] mb-6 leading-relaxed">
      <span class="animate-fade-in-out">Project-ready QA for complex rollouts.</span>
      <span class="animate-fade-in-out">Scale delivery with adaptive quality solutions.</span>
      <span class="animate-fade-in-out">QA that aligns with how you build and ship.</span>
      <span class="animate-fade-in-out">Smarter testing for smarter decisions.</span>
    </div>
    
    <a href="#cta" class="btn-blue inline-block mt-4 hover:scale-105 transition-transform">
      Explore Smarter QA Services
    </a>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
      <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300">
        <h3 class="text-lg font-semibold mb-2 text-gray-800">AI-driven automation</h3>
        <p class="text-gray-600">Testing built to evolve with dynamic project needs</p>
      </div>
      <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 delay-100">
        <h3 class="text-lg font-semibold mb-2 text-gray-800">Strategic QA</h3>
        <p class="text-gray-600">Project-aligned quality embedded from day one</p>
      </div>
      <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 delay-200">
        <h3 class="text-lg font-semibold mb-2 text-gray-800">Insightful Reporting</h3>
        <p class="text-gray-600">Real-time dashboards and feedback that support decisions</p>
      </div>
    </div>
  </div>
</section>

    <!-- Unified QA Evolution Section -->
    <section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">QA That Adapts to How You Deliver</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Whether you're launching MVPs, scaling platforms, or managing enterprise deployments, we bring QA that meets you where you are—with flexibility, speed, and depth.
        </p>
        <div class="w-20 h-1 bg-blue-500 mx-auto mt-6"></div>
      </div>

      <!-- Benefits Grid -->
      <div class="grid md:grid-cols-2 gap-8 mb-16">
        <div class="space-y-8">
          <div class="bg-white p-8 rounded-xl shadow-sm border-l-4 border-blue-400">
            <!-- <div class="text-blue-600 text-2xl font-bold mb-3">1</div> -->
            <h3 class="text-xl font-semibold mb-3 text-gray-800">Frictionless QA in Agile & Waterfall</h3>
            <p class="text-gray-600">We integrate into your process—Agile, Waterfall, or hybrid—without disruption</p>
          </div>
          <div class="bg-white p-8 rounded-xl shadow-sm border-l-4 border-blue-400">
            <!-- <div class="text-blue-600 text-2xl font-bold mb-3">2</div> -->
            <h3 class="text-xl font-semibold mb-3 text-gray-800">Early Risk Detection</h3>
            <p class="text-gray-600">From requirements to release, we identify gaps before they escalate</p>
          </div>
        </div>
        <div class="space-y-8">
          <div class="bg-white p-8 rounded-xl shadow-sm border-l-4 border-blue-400">
            <!-- <div class="text-blue-600 text-2xl font-bold mb-3">3</div> -->
            <h3 class="text-xl font-semibold mb-3 text-gray-800">Coverage Built for Business</h3>
            <p class="text-gray-600">Our tests reflect real user behavior, system logic, and data validation needs</p>
          </div>
          <div class="bg-white p-8 rounded-xl shadow-sm border-l-4 border-blue-400">
            <!-- <div class="text-blue-600 text-2xl font-bold mb-3">4</div> -->
            <h3 class="text-xl font-semibold mb-3 text-gray-800">Faster Feedback, Smarter Decisions</h3>
            <p class="text-gray-600">Real-time metrics, insights, and traceability at every stage</p>
          </div>
        </div>
      </div>

      <!-- Supporting Features -->
      <div class="grid md:grid-cols-2 gap-6 mb-16">
        <div class="bg-white p-6 rounded-lg border-l-4 border-blue-200">
          <h3 class="font-semibold mb-2 flex items-center">
            <span class="bg-blue-100 text-blue-600 rounded-full w-6 h-6 flex items-center justify-center mr-3">✓</span>
            CI/CD Integration
          </h3>
          <p class="text-gray-600">Quality gates that flow with your pipelines—no friction, no lag</p>
        </div>
        <div class="bg-white p-6 rounded-lg border-l-4 border-blue-200">
          <h3 class="font-semibold mb-2 flex items-center">
            <span class="bg-blue-100 text-blue-600 rounded-full w-6 h-6 flex items-center justify-center mr-3">✓</span>
            Data Integrity Checks
          </h3>
          <p class="text-gray-600">We validate beyond UI—data models, APIs, and workflows included</p>
        </div>
      </div>

      <!-- Results for Teams -->
      <div class="bg-blue-50 p-8 rounded-xl">
        <h3 class="text-center font-bold text-lg mb-8 text-gray-800">
          What This Means For Your Team:
        </h3>
        <div class="grid md:grid-cols-3 gap-6">
          <div class="text-center">
            <p class="font-medium">Faster release cycles</p>
            <p class="text-sm text-gray-600 mt-1">From weekly sprints to daily deployments</p>
          </div>
          <div class="text-center">
            <p class="font-medium">Less firefighting</p>
            <p class="text-sm text-gray-600 mt-1">Fewer production issues, fewer post-release patches</p>
          </div>
          <div class="text-center">
            <p class="font-medium">Reliable coverage</p>
            <p class="text-sm text-gray-600 mt-1">Sustainable test suites built for change</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="meet-ametis py-20 bg-gray-100">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold mb-4 text-gray-900">More Than Testers — We're Strategic Partners in Product Success</h2>
    <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-10">
      QA isn't just a phase. It's a product mindset that aligns with business goals, user needs, and engineering workflows.
    </p>
    <div class="grid md:grid-cols-3 gap-6 mt-8">
      <!-- Card 1 -->
      <div class="relative bg-white p-6 rounded-xl group hover:shadow-lg transition-all duration-300 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-white z-0 opacity-80"></div>
        <div class="relative z-10">
          <div class="w-12 h-12 bg-blue-500 rounded-lg mb-4 flex items-center justify-center text-white mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">Expert Team</h3>
          <p class="text-gray-600">QA engineers, SDETs, BAs, and devs who think like your product team</p>
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="relative bg-white p-6 rounded-xl group hover:shadow-lg transition-all duration-300 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-white z-0 opacity-80"></div>
        <div class="relative z-10">
          <div class="w-12 h-12 bg-blue-500 rounded-lg mb-4 flex items-center justify-center text-white mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">Product Mindset</h3>
          <p class="text-gray-600">We ensure everything we test adds business value, not just coverage</p>
        </div>
      </div>
      
      <!-- Card 3 -->
      <div class="relative bg-white p-6 rounded-xl group hover:shadow-lg transition-all duration-300 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-white z-0 opacity-80"></div>
        <div class="relative z-10">
          <div class="w-12 h-12 bg-blue-500 rounded-lg mb-4 flex items-center justify-center text-white mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">Quality Advocacy</h3>
          <p class="text-gray-600">Championing quality across your entire development lifecycle</p>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- Method Section -->
  <section class="method bg-white py-20 animate-slide-up">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-10">The ametis Method: Where Strategy Meets Smart Execution</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-slide-up">
          <h3 class="font-semibold text-xl mb-3">Embedded Quality from Day Zero</h3>
          <p class="text-gray-700">We engage from product shaping to catch issues early—not after code ships.</p>
        </div>
        <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-slide-up delay-100">
          <h3 class="font-semibold text-xl mb-3">AI-Augmented Test Automation</h3>
          <p class="text-gray-700">Self-healing automation that evolves with your product and scales quality quickly.</p>
        </div>
        <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-slide-up delay-200">
          <h3 class="font-semibold text-xl mb-3">Context-Aware Exploratory Testing</h3>
          <p class="text-gray-700">Our experts test real-world user journeys and edge cases tools often miss.</p>
        </div>
        <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-slide-up">
          <h3 class="font-semibold text-xl mb-3">Intelligent Data Assurance</h3>
          <p class="text-gray-700">We validate business-critical data and prevent silent data failures across systems.</p>
        </div>
        <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-slide-up delay-100">
          <h3 class="font-semibold text-xl mb-3">Predictive Quality Intelligence</h3>
          <p class="text-gray-700">Analytics that surface risk patterns and enable smarter product decisions.</p>
        </div>
        <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-slide-up delay-200">
          <h3 class="font-semibold text-xl mb-3">Continuous Feedback Loops</h3>
          <p class="text-gray-700">Real-time insights that help your team improve with every release cycle.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="advantage bg-gray-100 py-20">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold mb-10 text-gray-900">Smarter QA, Smarter Results</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
        <h3 class="text-xl font-semibold mb-2 text-gray-900">Accelerated Time to Market</h3>
        <p class="text-gray-600">Release faster with confidence through streamlined QA processes</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
        <h3 class="text-xl font-semibold mb-2 text-gray-900">Happier Users</h3>
        <p class="text-gray-600">Deliver smoother UX with comprehensive quality coverage</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
        <h3 class="text-xl font-semibold mb-2 text-gray-900">Lower QA Costs</h3>
        <p class="text-gray-600">Reduce rework and maintenance through intelligent automation</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
        <h3 class="text-xl font-semibold mb-2 text-gray-900">High-Integrity Data</h3>
        <p class="text-gray-600">Ensure reliable data flows across your systems</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
        <h3 class="text-xl font-semibold mb-2 text-gray-900">Lower Release Risk</h3>
        <p class="text-gray-600">Identify and mitigate risks before they reach production</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
        <h3 class="text-xl font-semibold mb-2 text-gray-900">Insight-Driven Decisions</h3>
        <p class="text-gray-600">Make smarter delivery choices with quality analytics</p>
      </div>
      <!-- Repeat for other benefit blocks -->
    </div>
  </div>
</section>

  <!-- Updated Foundation Section -->

<section class="foundation py-20 bg-white">
  <div class="container mx-auto px-4 text-center">
  <h2 class="text-3xl font-bold mb-4">How We Operate: Built to Adapt, Scale, and Deliver</h2>
      <p class="text-xl text-gray-700 max-w-3xl mx-auto mb-10">
        Tool-agnostic, framework-ready, and process-aligned—we integrate with your stack, pipelines, and people.
      </p>
    <!-- ... other content ... -->
    <div class="max-w-2xl mx-auto mb-6">
      <!-- Updated Tool Scroller with consistent colors -->
      <div class="bg-gray-900 rounded-lg p-4 mb-3 overflow-hidden relative group">
        <div class="marquee-content whitespace-nowrap w-[200%]">
          <div class="inline-flex items-center space-x-4">
            <!-- Using shades of blue and gray -->
            <span class="text-blue-400 font-medium">Selenium</span>
            <span class="text-gray-500">•</span>
            <span class="text-blue-300 font-medium">Playwright</span>
            <span class="text-gray-500">•</span>
            <span class="text-blue-200 font-medium">Postman</span>
            <!-- ... other tools with similar pattern ... -->
            <span class="text-green-400 font-medium">Selenium</span>
            <span class="text-gray-500">•</span>
            <span class="text-blue-400 font-medium">Playwright</span>
            <span class="text-gray-500">•</span>
            <span class="text-purple-400 font-medium">Postman</span>
            <span class="text-gray-500">•</span>
            <span class="text-yellow-400 font-medium">JMeter</span>
            <span class="text-gray-500">•</span>
            <span class="text-red-400 font-medium">Cypress</span>
            <span class="text-gray-500">•</span>
            <span class="text-pink-400 font-medium">Appium</span>
            <span class="text-gray-500">•</span>
            <span class="text-indigo-400 font-medium">K6</span>
            <span class="text-gray-500">•</span>
            <span class="text-teal-400 font-medium">Karate</span>
            <span class="text-gray-500">•</span>
            <span class="text-orange-400 font-medium">Datadog</span>
          </div>
        </div>
      </div>
      <p class="text-lg text-gray-600">
        Our toolkit is wide and battle-tested. Metrics, feedback loops, and continuous improvement are part of our DNA.
      </p>
      <div class="mt-10 bg-blue-50 p-6 rounded-xl max-w-4xl mx-auto animate-pulse">
        <p class="text-lg font-medium text-gray-800">Backed by our promise: <span class="text-blue-600">transparency, results, and partnership.</span></p>
      </div>
    </div>
  </div>
</section>

<section id="cta" class="cta py-20 bg-gradient-to-r from-blue-600 to-blue-500 text-white text-center">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-4">Ready to Elevate Your Software with Intelligent QA?</h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">Let's turn quality into your competitive edge. We're ready when you are.</p>
    <div class="flex justify-center">
      <a href="#" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-300 animate-pulse">
        Schedule Your QA Strategy Session
      </a>
    </div>
  </div>
</section>
</main>
<?php include 'footer.php'; ?>