const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { VueLoaderPlugin } = require('vue-loader');

module.exports = {
  watch:true,
  entry: './src/index.js',
  output: {
    path: __dirname + '/assets',
    filename: 'js/bundle.js'
  }, 

  module: {
    rules: [
      {
        test: /\.css$/i,
        use: ['style-loader','css-loader'],
      },
      {
        test: /\.scss$/i,
        use: [MiniCssExtractPlugin.loader, 'css-loader','sass-loader'],
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader'
        }
      },
      {
        test: /\.vue$/,
        loader: 'vue-loader'
      },
    ],
  },
  resolve: {
    alias: {
      'vue$': 'vue/dist/vue.esm.js'
    },
    extensions: ['*', '.js', '.vue', '.json']
  },
  plugins:[
    new VueLoaderPlugin(),
    new MiniCssExtractPlugin({
      filename: 'styles/bundle.css'
    }),
    new BrowserSyncPlugin({
      proxy: 'http://localhost:8888/www/ginger/',
      tunnel: true,
      files: [
        {
            match: [
                '**/*.php',
                '**/*.scss',
                '**/*.css',
                '**/*.vue',
                '**/*.js'
                
            ],
            fn: function(event, file) {
                if (event === "change") {
                    const bs = require('browser-sync').get('bs-webpack-plugin');
                    bs.reload();
                }
            }
        }
    ]
  })
  ]
}