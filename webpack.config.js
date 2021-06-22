const webpack = require("webpack");
const autoprefixer = require("autoprefixer");
const _module = {
    rules: [
        {
            test: /\.css$/,
            exclude: /node_modules/,
            use: [
                MiniCssExtractPlugin.loader,
                "css-loader",
                "postcss-loader"
            ]
        }
    ]
}
const plugins = [
    new webpack.LoaderOptionsPlugin({
        options: {
            postcss: [
                autoprefixer()
            ]
        }
    })
];