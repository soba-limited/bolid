import styles from '@/styles/components/header.module.scss'
import Link from 'next/link';
import hLogo from '@/images/common/h-logo.png'
import Image from 'next/image';

const Header = () => {
  return (
    <header>
      <Link href="/">
        <a className={styles.logo}>
          <Image
            src={hLogo}
            alt=""
            layout="responsive"
            sizes="(min-width: 1340px) 300px, 100vw"
            priority
          />
        </a>
      </Link>
    </header>
  );
}

export default Header;