import styles from '@/styles/components/pageNavi.module.scss'
import Link from 'next/link';
import { pageNaviData } from '@/lib/constants'

const PageNavi = ({white = false}) => {
  return (
    <nav className={styles.naviList}>
      <ul className={white ? styles.colorWhite : ''}>
        {pageNaviData.map((items, index) => (
          <li key={index}>
            <Link href={items.link}>
              <a className="en">{items.name}</a>
            </Link>
          </li>
        ))}
      </ul>
    </nav>
  );
}

export default PageNavi;