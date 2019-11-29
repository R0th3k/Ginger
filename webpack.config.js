const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { VueLoaderPlugin } = require('vue-loader');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
// const CompressionPlugin = require('compression-webpack-plugin');
// const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;


module.exports = {
  entry: {
    app: './src/index.js',  
  },
  output: {
    filename: 'js/[name].js',
    path: path.resolve(__dirname, 'assets')
  },
  optimization: {
      splitChunks: {
        chunks: 'all',
        minSize: 30000,
        automaticNameDelimiter: '-',
      }
    },
    resolve: {
      alias: {
        'vue$': 'vue/dist/vue.esm.js',
      },
      extensions: ['*', '.js', '.vue', '.json']
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

  plugins:[
    new VueLoaderPlugin(),
    new MiniCssExtractPlugin({
      filename: 'styles/[name].css'
    }),
    new BrowserSyncPlugin(
      {
        watch: true,
        open:false,
        host: '127.1.1.0',
        port: 3000,
        proxy: 'http://localhost:8888/www/ginger/',
        files: [
          {
              match: [
                  '**/*.php',
                  'src/scss/*.scss',
                  'assets/styles/*.css',
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
      },
      {
        reload: false,
        name: 'bs-webpack-plugin'
      }
    ),
    // new CompressionPlugin(),
  // new BundleAnalyzerPlugin()
  ]
}