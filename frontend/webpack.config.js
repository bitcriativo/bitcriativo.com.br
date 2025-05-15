import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

export default {
    entry: path.resolve(__dirname, 'resources/js/main.js'),
    output: {
        filename: 'js/bundle.js',
        path: path.resolve(__dirname, 'public/assets'),
        clean: true,
    },
    mode: 'development',
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                },
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader'],
            },
        ],
    },
    devServer: {
        static: './resources/assets',
        port: 3000,
        open: true,
    },
    devtool: 'source-map',
};
