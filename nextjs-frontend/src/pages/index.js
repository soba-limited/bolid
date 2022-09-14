import Link from 'next/link'
import { useAuth } from '@/hooks/auth'
import { Meta } from '@/components'
import PageLayout from '@/components/Layouts/PageLayout'

export default function Home() {
    const { user } = useAuth({ middleware: 'guest' })

    return (
        <>
            <Meta />

            <div>
                {user ? (
                    <Link href="/dashboard">
                        <a>Dashboard</a>
                    </Link>
                ) : (
                    <>
                        <Link href="/login">
                            <a>Login</a>
                        </Link>

                        <Link href="/register">
                            <a>Register</a>
                        </Link>
                    </>
                )}
            </div>
        </>
    )
}

Home.getLayout = function getLayout(page) {
    return <PageLayout>{page}</PageLayout>
}
