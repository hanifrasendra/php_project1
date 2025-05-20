module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],

  theme: {
    extend: {
      boxShadow: {
        // Custom shadows
        '3d': '4px 4px 0px 0px rgba(0, 0, 0, 0.95)',
        'glow': '0 0 20px 5px rgba(255, 255, 0, 0.3)',
        'soft': '0 4px 12px -2px rgba(0, 0, 0, 0.1)',
        
        // Multi-layered shadow
        'layered': `
          0 2px 4px rgba(0, 0, 0, 0.1),
          0 8px 16px rgba(0, 0, 0, 0.1),
        `,
        'card': '0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)',
      }
    }
  }
}
