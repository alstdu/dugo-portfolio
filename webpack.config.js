const webpack = require('webpack');
const path = require("path")

module.exports = {
  entry : "./scripts/scripts.js",
  output : {
    path: path.resolve(__dirname, "dist"),
    filename: "scripts.bundle.js"
  },
  plugins: [
    new webpack.optimize.LimitChunkCountPlugin({
        maxChunks: 1
    })
]
}