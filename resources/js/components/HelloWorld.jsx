import React from 'react'
import {motion} from 'framer-motion'
import {createRoot} from 'react-dom/client'

function Component() {
    return (
        <motion.div
            whileHover={{scale: 1.2}}
            whileTap={{scale: 1.1}}
            drag="x"
            dragConstraints={{left: -100, right: 100}}
        >
            <div className="mt-5 text-2xl text-center">
                <div className="text-indigo-500"><h2>React Component in Laravel</h2></div>
                <div className="card-body">Woohoo let's go!!</div>
            </div>
        </motion.div>
    )
}

export default function createComponentInElement(...ids) {

    // If our element/target is in the traditional DOM
    document.addEventListener('DOMContentLoaded', () => {
        for (let id of ids) {
            const el = document.getElementById(id)
            if (el) {
                createRoot(el).render(<Component/>)
            }
        }
    })

    // If our element in inside a Livewire component
    Livewire.hook('element.init', ({el}) => {
        if (ids.includes(el.id)) {
            const root = createRoot(el)
            root.render(<Component/>)
        }
    })
}

